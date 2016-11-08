
<div class="left_menu" >
    <div class="sidebar" id="set_user_service_id">
        <ul id="navmenu">
            <li class="home"><a href="<?php echo base_url(); ?>" id="homepage" class="top">Dashboard</a></li>
            <li>
                <a class="chld" href="javascript:void(0)">Member</a>
                <ul id="baby">

                    <li><a href="<?php echo base_url() . 'member/index' ?>">Member Survey</a></li>

                    <li><a href="<?php echo base_url() . 'member/addmission' ?>">Member Admission</a></li>
                    <li><a href="<?php echo base_url() . 'member/loan_admission' ?>">Loan Application</a></li>
                </ul>
            </li>
            <li>
                <a class="chld" href="#">Payment</a>
                <ul id="baby">
                    <li><a href="#">Buy Card</a></li>
                    <li><a href="#">History</a></li>
                </ul>
            </li>
            <li>
                <a class="chld" href="#">Bill Pay</a>
                <ul id="baby">
                    <li><a href="#">New BillPay</a></li>
                    <li><a href="#">BillPay History</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url() . 'auth/logout' ?>">
                    <img src="<?php echo base_url(); ?>resources/images/logout.png"> 
                    <b>Logout</b>
                </a>
            </li>

        </ul>
        <div class="clrGap">&nbsp;</div>
    </div>
</div>