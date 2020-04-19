@extends('site::layouts.master')

@section('content')
<div class="container custom-container mt-2">
    <div class="" style="display: block;">
        <div class="blockWidth" style="">
            <div class="middleWpr" style="">
                <ul class="metabls tabs row ml-0" id="tab">
                    <li class="active" role="tax">Tax Implication</li>
                    <li role="document" class="">Documents</li>
                </ul>
                <div class="faqDoc mb-2" style="padding:10px 30px;  background:#fff; border:1px solid #33465c66;">
                    <div id="tax" class="tabContent" style=" display: block;">
                        <div class="quesSection">
                            <div class="answer" id="question1">
                                <div class="qHeading">1. What are the taxes you have to pay while purchasing property?
                                </div>
                                <p>If you are buying a new property, you have to pay Service Tax, VAT and Stamp Duty on
                                    the
                                    total amount of purchase. If you buy re-sale property, then you do not have to pay
                                    any of
                                    these taxes.</p>
                            </div>
                            <div class="answer" id="question2">
                                <div class="qHeading">2. When is the transaction of sale considered complete?</div>
                                <p>The transaction of sale is considered complete when either the possession is given or
                                    Conveyance Deed is registered.</p>
                            </div>
                            <div class="answer" id="question3">
                                <div class="qHeading">3. When are capital gains applicable and how can capital gain tax
                                    be saved
                                    / reduces ?</div>
                                <p>Capital gain is applicable when:</p>
                                <p><span class="arrow"></span> The sold property has been withheld by a person for a
                                    period of
                                    more than three years from the date of purchase / possession.</p>
                                <p><span class="arrow"></span> The sale proceeds are invested in a residential property
                                    which is
                                    bought one year before the sale of property or two years after the sale of first
                                    property.
                                </p>
                                <p><span class="arrow"></span> The new property is bought after the sale of the first
                                    propety.
                                </p>
                                <p><span class="arrow"></span> Capital Gains Tax can also be saved by investing the sale
                                    proceeds in Capital Gain Bonds.</p>
                            </div>
                        </div>
                    </div>
                    <div id="document" class="tabContent" style="transform: none; display: none;">
                        <div class="quesSection">
                            <div class="answer" id="docQuestion1">
                                <div class="qHeading">1. What documents and formalities are required while buying
                                    property?
                                </div>
                                <p>Documents required while buying property are Identity Proof like Voters' ID Card,
                                    Passport,
                                    Driving License, Ration Card and Pan Card. Be careful of the Sale Deed/Agreement and
                                    also
                                    check that the complete property chain is mentioned in the Deed.</p>
                            </div>
                            <div class="answer" id="docQuestion2">
                                <div class="qHeading">2. Things you should check at the time of signing the agreement?
                                </div>
                                <p>Here are the important things to check before you sign the agreement with the
                                    developer:</p>
                                <p><span class="arrow"></span> l Specific apartment allotted, tower number and size</p>
                                <p><span class="arrow"></span> Details of area including super area, covered area and
                                    carpet
                                    area Costing</p>
                                <p><span class="arrow"></span> Date of possession, penalty in case of delay</p>
                            </div>
                            <div class="answer" id="docQuestion3">
                                <div class="qHeading">3. How do you know that a project has legal approvals from
                                    authorities?
                                </div>
                                <p>The best way is to check if the banks are funding the project. Generally, banks
                                    approve
                                    projects and start disbursement only after all the approvals are in place.</p>
                                <p><span class="arrow"></span> Ensure that the documents of Title of the property you
                                    intend to
                                    purchase are clear. A defective Title will create problems.</p>
                                <p><span class="arrow"></span> Ensure that the building has been constructed as per the
                                    sanctioned plan and deviation, if any, is in the allowed limits. It should not be in
                                    a
                                    low-lying area or in a filled-up water body.</p>
                                <p><span class="arrow"></span> Ensure that the developer has clearance certificates from
                                    the
                                    Electricity Board, Water and Sewage Board and other concerned departments.</p>
                                <p><span class="arrow"></span> Commencement Certificate and Occupancy Certificate are
                                    other
                                    important documents that are necessary while buying property. Check out the
                                    genuine-ness of
                                    the documents with the concerned authorities.</p>
                                <p><span class="arrow"></span> Ensure Agreement for Sale and Sale Deed, duly stamped,
                                    executed
                                    and registered are in your possession. Both should contain fair clauses for both the
                                    parties.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        mbLoad();

        function mbLoad() {

        }

        function scrollWin() {
            $('body,html').animate({
                scrollTop: 0
            }, "fast");
        }
        scrollWin();

        $(document).ready(function() {
            
            var getUrl = window.location.href;
            var getTabName = getUrl.split('?');
            if (getTabName[1]) {
                showDiv(getTabName[1]);
            }

            $('#tab li').click(function() {
                var elem = $(this);
                $('.tabContent').hide();
                elem.addClass('active').siblings().removeClass('active')
                $('#' + elem.attr('role')).show();
            })
        });


        function showDiv(option) {
            $('.tabContent').hide();
            $('#' + option).show();
            $('#tab li').removeClass('active')
            $('li[role=' + option + ']').addClass('active');
        }

        </script>
    </div>
</div>
@endsection