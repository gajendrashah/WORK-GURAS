@extends('site::layouts.master')

@section('content')
<div class="container custom-container mt-2">
    <div class="" style="display: block; padding:10px 30px;  background:#fff;transform: none;">
        <div class="" id="roiSection" style="display: block;">
            <!-- <script type="text/javascript">
                $(document).ready(function() {
                    var pp = getSessionCookie('pproi');
                    if (pp != null && pp != "") {
                        $('#pproi').val(addCommas(pp));
                    } else {
                        $('#pproi').val(addCommas(4500000));
                    }
                    var r = getSessionCookie('rroi');
                    if (r != null && r != "") {
                        $('#rroi').val(r);
                    } else {
                        $('#rroi').val(10);
                    }
                    var lt = getSessionCookie('ltroi');
                    if (lt != null && lt != "") {
                        if (lt > 50) lt = parseInt(lt / 12); // convert to years : first time after go live
                        $('#ltroi').val(lt);
                    } else {
                        $('#ltroi').val(20);
                    }
                    var ip = getSessionCookie('iproi');
                    if (ip != null && ip != "") {
                        $('#iproi').val(ip);
                    } else {
                        $('#iproi').val(20);
                    }
                    var cpp = getSessionCookie('cpproi');
                    if (cpp != null && cpp != "") {
                        $('#cpproi').val(addCommas(cpp));
                    } else {
                        $('#cpproi').val(addCommas(5000000));
                    }
                    var ai = getSessionCookie('airoi');
                    if (ai != null && ai != "") {
                        $('#airoi').val(ai);
                    } else {
                        $('#airoi').val(5);
                    }
                    var rpm = getSessionCookie('rpmroi');
                    if (rpm != null && rpm != "") {
                        $('#rpmroi').val(addCommas(rpm));
                    } else {
                        $('#rpmroi').val(addCommas(20000));
                    }
                    var nmr = getSessionCookie('nmrroi');
                    if (nmr != null && nmr != "") {
                        $('#nmrroi').val(nmr);
                    } else {
                        $('#nmrroi').val(12);
                    }
                    var dp = getSessionCookie('dproi');
                    if (dp != null && dp != "") {
                        $('#dproi').val(addCommas(dp));
                    } else {
                        $('#dproi').val(addCommas(500000));
                    }
                    var date = new Date();
                    var newdate = new Date(date);
                    newdate.setMonth(date.getMonth() - 80);
                    var str = "";
                    str = newdate.getDate() + "/" + (newdate.getMonth() + 1) + "/" + newdate.getFullYear();
                    var pd = getSessionCookie('pdroi');
                    if (pd != null && pd != "") {
                        $('#pdroi').val(pd);
                    } else {
                        $('#pdroi').val(str);
                    }
                    submitReturnOnInvestmentCalculator(false);
                });
            </script> -->
            <div class="advFinanceWrapper">
                <!-- <div class="formWrapper formROI">
                    <div class="blockWidth-pl40">
                        <div class="formCont">
                            <div class="formRow">
                                <div class="formLabel">
                                    <label>Purchase Type</label>
                                </div>
                                <div class="formField fldRadio">
                                    <span class="customRadioButton checked"><input type="radio" value=""
                                            name="roiPurchageType"
                                            onclick="hideFieldsBasedOnType('Loan');customRadioButton(this, 'roiPurchageType');"
                                            checked="checked" id="roiPurchageTypeLoan" style="opacity: 0;"></span>
                                    <label class="radioLabel" for="roiPurchageTypeLoan">Loan</label>
                                    <span class="customRadioButton"><input type="radio" value="" name="roiPurchageType"
                                            onclick="hideFieldsBasedOnType('Cash');customRadioButton(this, 'roiPurchageType');"
                                            id="roiPurchageTypeCash" style="opacity: 0;" checked="checked"></span>
                                    <label class="radioLabel" for="roiPurchageTypeCash">Cash</label>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow">
                                <div class="formLabel">
                                    <label>Is your property on Rent</label>
                                </div>
                                <div class="formField fldRadio">
                                    <span class="customRadioButton"><input type="radio" name="roiYesNo"
                                            onclick="toggleRentInputs('Y');customRadioButton(this, 'roiYesNo');"
                                            id="roiYes" style="opacity: 0;"></span>
                                    <label class="radioLabel" for="roiYes">Yes</label>
                                    <span class="customRadioButton checked"><input type="radio" name="roiYesNo"
                                            onclick="toggleRentInputs('N');customRadioButton(this, 'roiYesNo');"
                                            checked="checked" id="roiNo" style="opacity: 0;"></span>
                                    <label class="radioLabel" for="roiNo">No</label>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow">
                                <div class="formLabel">
                                    <label>Purchase Price</label>
                                </div>
                                <div class="formField">
                                    <span class="rupeeIcon"></span>
                                    <input class="inputAdvFinance" type="text" id="pproi"
                                        onblur="fromNumberToWords(this,'pproi_in_rs');" oninput="reFormate(this)"
                                        maxlength="15">
                                    <div id="pproiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                                <div class="amtInWord" id="pproi_in_rs"></div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow" id="dpDiv" style="display: block;">
                                <div class="formLabel">
                                    <label>Down Payment</label>
                                </div>
                                <div class="formField">
                                    <span class="rupeeIcon"></span>
                                    <input class="inputAdvFinance" type="text" id="dproi"
                                        onblur="fromNumberToWords(this,'dproi_in_rs');" oninput="reFormate(this)"
                                        maxlength="15">
                                    <div id="dproiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                                <div class="amtInWord" id="dproi_in_rs"></div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow" id="ltDiv" style="display: block;">
                                <div class="formLabel subLebal">
                                    <label>Loan Tenure</label>
                                    <span>(in years)</span>
                                </div>
                                <div class="formField">
                                    <input class="inputAdvFinance" type="text" id="ltroi" oninput="reFormate(this)"
                                        maxlength="3">
                                    <div id="ltroiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow" id="roiDiv" style="display: block;">
                                <div class="formLabel">
                                    <label>Rate of Interest</label>
                                </div>
                                <div class="formField">
                                    <span class="modularIcon">%</span>
                                    <input class="inputAdvFinance" type="text" id="rroi" oninput="reFormate(this)"
                                        maxlength="5">
                                    <div id="rroiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow" id="ipDiv" style="display: block;">
                                <div class="formLabel">
                                    <label>Number of EMIs paid</label>
                                </div>
                                <div class="formField">
                                    <input class="inputAdvFinance" type="text" id="iproi" oninput="reFormate(this)"
                                        maxlength="3">
                                    <div id="iproiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow">
                                <div class="formLabel">
                                    <label>Purchase Date</label>
                                </div>
                                <div class="formField">
                                    <input class="inputAdvFinance" type="text" id="pdroi"
                                        onclick="displayCalendar(document.getElementById('pdroi'),'dd/mm/yyyy',this);"
                                        readonly="">
                                    <span class="calenderIcon"></span>
                                    <div id="pdroiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow">
                                <div class="formLabel">
                                    <label>Current Price of Property</label>
                                </div>
                                <div class="formField">
                                    <span class="rupeeIcon"></span>
                                    <input class="inputAdvFinance" type="text" id="cpproi"
                                        onblur="fromNumberToWords(this,'cpproi_in_rs');" oninput="reFormate(this)"
                                        maxlength="15">
                                    <div id="cpproiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                                <div class="amtInWord" id="cpproi_in_rs"></div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow">
                                <div class="formLabel">
                                    <label>Annual Inflation</label>
                                </div>
                                <div class="formField">
                                    <input class="inputAdvFinance" type="text" id="airoi" maxlength="5">
                                    <span class="modularIcon">%</span>
                                    <div id="airoiError" oninput="reFormate(this)" class="calError"
                                        style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow" id="rpmDiv" style="display: none;">
                                <div class="formLabel">
                                    <label>Rent per month</label>
                                </div>
                                <div class="formField">
                                    <span class="rupeeIcon"></span>
                                    <input class="inputAdvFinance" type="text" id="rpmroi" oninput="reFormate(this)"
                                        maxlength="14">
                                    <div id="rpmroiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow" id="nmrDiv" style="display: none;">
                                <div class="formLabel subLebal">
                                    <label>No. of months for which rent was collected</label>
                                </div>
                                <div class="formField">
                                    <input class="inputAdvFinance" type="text" id="nmrroi" oninput="reFormate(this)"
                                        maxlength="4">
                                    <div id="nmrroiError" class="calError" style="display: none;"></div>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                            <div class="formRow">
                                <div class="formLabel">
                                    &nbsp;
                                </div>
                                <div class="formField">
                                    <input class="btnAdvFinance" type="button" value="Find ROI"
                                        onclick="submitReturnOnInvestmentCalculator(true)">
                                    <span class="resetAll"><a
                                            href="javascript: resetReturnOnInvestmentCalculator()">Reset All</a></span>
                                </div>
                                <div class="clearAll"></div>
                            </div>
                        </div>
                        <div class="resultRoi" id="roiCalcOutputSection" style="display: block;">
                            <div class="resultRoiLeft" id="iconRoiId"><span class="erroCirIcon"></span></div>
                            <div class="resultRoiRight">
                                <div class="resultHeading" id="roiOutputDiv">Your investment returns doesn't beat the
                                    inflation</div>
                                <div class="resultHeading_2" id="roiOutputValueDiv">Your total ROI is -31%</div>
                            </div>
                            <div class="clearAll"></div>
                        </div>
                        <div class="clearAll"></div>
                    </div>
                </div> -->
                <div class="howDoes roiHow">
                    <div class="howHeading">
                        <h3 class="headings-roi">How does this calculator work?</h3>
                    </div>
                    <p>This calculator considers possible scenarios of property buying and renting and evaluate the
                        return on investment. If the property is purchased with cash, then the inflation is considered
                        to know the present value of the property and that is measured against the actual current price
                        of the property to know the return on investment and compares this with the inflation.<br><br>
                        If the property is purchased with a loan, then the present value of the down payment and the EMIs
                        are calculated and measured against the property appreciation to know the ROI.<br><br>
                        In the both the scenarios, calculator has provision to accommodate the rental income and
                        calculate the overall return on investment</p>
                </div>
                <hr>
            </div>
            <div class="roiTipsCont">
                <div class="roiTipHeading">ROI Tips</div>
                <h3 class="headings-roi">What would be a safe and sound approach to buy property?</h3>
                <p>Do your complete research on the Web and physical survey of the projects. Invest in projects which
                    are at least 25-30 per cent complete as this will be comfortable in terms of approvals. Brokers may
                    sometime offer better rates than the developer's sales team. Bank approved projects are preferred
                    since they give comfort in terms of the approvals.</p>
                <h3 class="headings-roi">What kind of return should you expect from your purchase after two years?</h3>
                <p>It is impossible to predict a return in two years. Property buying as an investment must be looked at
                    in terms of long-term holding capacity. While in the last two years, certain properties in metros
                    have gone up by 20-80 per cent, in some cases that cannot be an indication of what the future holds.
                    An exit after four years usually yields great returns</p>
                <h3 class="headings-roi">How to estimate growth in the value of land in future?</h3>
                <p>Infrastructure development has to keep pace with the swanky townships being planned in most cities.
                    If water supply, electricity, safety or security, law and order, road infrastructure, etc are
                    progressive, we can only expect appreciation in the land value.</p>
                <h3 class="headings-roi">How to choose a location that ensures the best return on investment?</h3>
                <p>Identifying a suitable location is one of the most important tasks of buying a property. Users
                    normally question about choosing best location to reap good returns on their investment.
                    Connectivity of the property with city and other location plays a vital role in boosting the re-sale
                    value. Buyer should ensure that the property is located in an ideal area with good connectivity to
                    the bus station, railway station, airport and super market etc.</p>
            </div>
        </div>
    </div>
</div>
@endsection