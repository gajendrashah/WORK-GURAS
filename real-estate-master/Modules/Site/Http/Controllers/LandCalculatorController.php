<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\AdsRepository;

class LandCalculatORController extends Controller
{
    protected $adsRepositORy;

    public function __construct(AdsRepositORy $adsRepositORy)
    {
        $this->adsRepositORy = $adsRepositORy;
    }

    public function index()
    {
        $data = [
            'advertisement' => $this->adsRepositORy->findlimitData(6),

            'landMeasurementResult' => $this->landMeasurement(),
        ];

        return view('site::calculator.index', $data);
    }

    public function landMeasurement() 
    {
        $request = request();

        if(isset($request->type)) {
            $bighaFrom = $request->type == 'Bigha' ? $request->number : 0;
            $kathhaFrom = $request->type == 'Kathha' ? $request->number : 0;
            $dhurFrom = $request->type == 'Dhur' ? $request->number : 0;
            $ropaniFrom = $request->type == 'Ropani' ? $request->number : 0;
            $aanaFrom = $request->type == 'Aana' ? $request->number : 0;
            $paisaFrom = $request->type == 'Paisa' ? $request->number : 0;
            $damFrom = $request->type == 'Dam' ? $request->number : 0;

            if($request->type == 'Bigha' || $request->type == 'Kathha' || $request->type == 'Dhur') {
                $total_dhur = 400*$bighaFrom + 20*$kathhaFrom + 1*$dhurFrom;
                $total_sqft = 182.25*$total_dhur;
                return $this->convertFromTotalSqft($total_sqft, $total_dhur);
            }
            else if($request->type == 'Ropani' || $request->type == 'Aana' || $request->type == 'Paisa' || $request->type == 'Dam') {
                $total_paisa = 64*$ropaniFrom + 4*$aanaFrom + 1*$paisaFrom + $damFrom/4;
                $total_sqft = 85.56*$total_paisa;
                return $this->convertFromTotalSqft($total_sqft, $total_paisa);
            }
        }
        
        if(isset($request->bigha) || isset($request->kathha) || isset($request->dhur)) {
            $bighaFrom = $request->bigha != '' || isset($request->bigha) ? $request->bigha : 0;
            $kathhaFrom = $request->kathha != '' || isset($request->kathha) ? $request->kathha : 0;
            $dhurFrom = $request->dhur != '' || isset($request->dhur) ? $request->dhur : 0;

            $total_dhur = 400*$bighaFrom + 20*$kathhaFrom + 1*$dhurFrom;
            $total_sqft = 182.25*$total_dhur;
            return $this->convertFromTotalSqft($total_sqft, $total_dhur);
            
        }

        if(isset($request->ropani) || isset($request->aana) || isset($request->paisa) || isset($request->dam)) {
            
            $ropaniFrom = $request->ropani != '' || isset($request->ropani) ? $request->ropani : 0;
            $aanaFrom = $request->aana != '' || isset($request->aana) ? $request->aana : 0;
            $paisaFrom = $request->paisa != '' || isset($request->paisa) ? $request->paisa : 0;
            $damFrom = $request->dam != '' || isset($request->dam) ? $request->dam : 0;

            $total_paisa = 64*$ropaniFrom + 4*$aanaFrom + 1*$paisaFrom + $damFrom/4;
            $total_sqft = 85.56*$total_paisa;
            return $this->convertFromTotalSqft($total_sqft, $total_paisa);
        }
       
    }


    public function convertFromTotalSqft($t,$e) { 
        $total_sqmt = .092903*$t;
        $total_paisa = $t/85.56;
        $total_dhur = $t/182.25;
        
        $ropaniPart = $total_paisa/64;
        // $remainingPaisa = $total_paisa - 64 * $ropaniPart;
        $aanaPart = $total_paisa/4;
        // $remainingPaisa-=4*$aanaPart;
        $paisaPart = $total_paisa;
        // $remainingPaisa -= $paisaPart;
        $damPart = 4*$paisaPart;
        
        $bighaPart = $total_dhur/400;
        //$remainingDhur = $total_dhur-400*$bighaPart;
        $kathhaPart = $total_dhur/20;
        //$remainingDhur -= 20*$kathhaPart;
        $dhurPart = $total_dhur;
        
        $ropaniText = "Ropani";
        $aanaText = "Aana";
        $paisaText = "Paisa";
        $damText = "Dam";
        $bighaText = "Bigha";
        $kathhaText = "Kathha";
        $dhurText = "Dhur";
        $sqmtText = "Square Meter";
        $sqftText = "Square Feet";
        
        $data = [
            "ropaniResult" => round($ropaniPart, 2) ." ". $ropaniText ." = ". round($aanaPart, 2) ." ". $aanaText ." = ". round($paisaPart, 2) ." ". $paisaText ." = ". round($damPart, 2) ." ". $damText,
            "bighaResult" => round($bighaPart, 2) ." ". $bighaText ." = ". round($kathhaPart, 2) ." ". $kathhaText ." = ". round($dhurPart, 2) ." ". $dhurText,
            "squareFeetResult" => round($t, 2) ." ". $sqftText,
            "squareMeterResult" => round($total_sqmt, 2) ." ". $sqmtText,
        ];

        return $data;
    }
    
}
