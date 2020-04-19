<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $filter['user_type'] ='web';
        $filter['name'] = $request->get('q');
        $sort['by'] = $request->get('key', 'id');
        $sort['sort'] = $request->get('sort', 'DESC');

        $customers = $this->userRepository->findAll($limit = 8, $filter, $sort);
        $customers->appends(['q' => $filter['name']]);

        $sort = ($sort['sort'] == 'DESC') ? 'ASC' : 'DESC';

        return view('admin::customer.list', compact('customers','sort'));

    }

}
