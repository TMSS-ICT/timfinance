<div class="row"  style="margin-top: 25px">
    <div class="ezttle">
        <div class="col-md-6">
            <div ><span class="text">ভর্তি ফরম </span></div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">জাতীয় পরিচয় পত্রের নং: </div>
                <div class="col-md-6" ><input type="text" class="form-control input-xs customInputMargin" placeholder="0579011225765768" ng-model="searchInfo.cellNo"></div>
                <div class="col-md-3"><input id="search_submit_btn" type="submit" size="18" value="খোজ করুন" onclick="search_member(angular.element(this).scope().searchInfo)" class="button-custom"></div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 25px">
    <div class=" row  form-group form-inline">
        <div class="col-md-3">
            <?php $this->load->view("member/add_picture"); ?>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
    </div>
    <div class=" row form-group form-inline">

        <div class=" col-md-3 form-group  ">
            <lebel class=""  for="">জোন</lebel>
            <select class="" name="zone_name">
                <option>ঢাকা</option>
                <option>পাবনা</option>
                <option>বগুড়া</option>
                <option>নাটোর</option>
            </select>
        </div>

        <div class=" col-md-3 form-group">
            <lebel class="" for="">অঞ্চল</lebel>
            <select class=""  name="area_name">
                <option>মিরপুর</option>
                <option>পবা</option>
                <option>বেড়া</option>
                <option>লালপুর</option>
            </select>
        </div>

        <div class=" col-md-3  form-group">
            <lebel  class=""  for="">শাখাঃ</lebel>
            <select class=""  name="branch_name">
                <option>মিরপুর</option>
                <option>পবা</option>
                <option>বেড়া</option>
                <option>লালপুর</option>
            </select>
        </div>
        <div class="col-md-3">
            <lebel  class=""  for="">শাখাঃ</lebel>
            <select class=""  name="branch_name">
                <option>মিরপুর</option>
                <option>পবা</option>
                <option>বেড়া</option>
                <option>লালপুর</option>
            </select>
        </div>

    </div>

    <div class=" row form-group form-inline">
        <div class="col-md-3">
            <lebel for="">নামঃ</lebel>
            <div class="form-group ">
                <select class="" name="name_title">
                    <option>নির্বাচন করুন</option>
                    <option>মোঃ</option>
                    <option>মোছাঃ</option>
                    <option>শ্রীঃ</option>
                    <option>শ্রীমতি</option>
                </select>
            </div>
        </div>
        <div class="col-md-3  form-group">
            <input  class="" type="text" name="first_name" placeholder="১ম নামঃ">
        </div>
        <div class="col-md-3 form-group ">
            <input class="" type="text" name="last_name" placeholder="২য় নামঃ">
        </div>
        <div class="form-group col-md-3 ">
            <lebel for="">পারিবারিক নামঃ</lebel>
            <select class="" name="family_name">
                <option>নির্বাচন করুন</option>
                <option>শেখ</option>
                <option>মোল্লা</option>
                <option>খান</option>
                <option>মণ্ডল</option>
            </select>
        </div>
    </div>
    <div class=" row form-group form-inline">
        <div class="col-md-3"></div>

        <div class="form-group col-md-3">
            <lebel for="">লিঙ্গঃ</lebel>
            <select class="" name="gender_name">
                <option>নির্বাচন করুন</option>
                <option>পুরুষ</option>
                <option>মহিলা</option>
                <option>অন্যান্য</option>
            </select>
        </div>
        <div class="col-md-3">
            <lebel for="">বয়সঃ</lebel>
            <div class="form-group ">
                <select class="" name="age">
                    <option>নির্বাচন করুন</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
        </div>
    </div>
    <div class=" row form-group form-inline">
        <div class="col-md-3">
            <lebel for="">ব্যাংকের তথ্য </lebel>
            <select class="" name="educational_qualification">
                <option>নির্বাচন করুন</option>
                <option>গ্রামীণ ব্যাংক</option>
                <option>ব্র্যাক</option>
                <option>কৃষি ব্যাংক</option>
            </select>

        </div>
        <div class="col-md-2">
            <input type="text" name="father/hasband_first_name" placeholder="আকাউন্ট নং">
        </div>
        <div class="col-md-2">
            <input type="text" name="father/hasband_second_name" placeholder="ঠিকানা">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-3">
        </div>

    </div>
    <div class=" row form-group form-inline">
        <div class="col-md-3">
            <lebel for="">সদস্যের ব্যবসার তথ্য</lebel>
        </div>
        <div class="col-md-2">
            <lebel for="">ব্যবসার ধরণ</lebel>
            <div class="form-group ">
                <select class="" name="age">
                    <option>নির্বাচন করুন</option>
                    <option>খুচরা বিক্রেতা</option>
                    <option>পাইকারি বিক্রেতা</option>
                </select>
            </div>
        </div>

        <div class="col-md-2">
            <lebel for="">ব্যবসার মালিকানা</lebel>
            <div class="form-group ">
                <select class="" name="age">
                    <option>নির্বাচন করুন</option>
                    <option>খুচরা বিক্রেতা</option>
                    <option>পাইকারি বিক্রেতা</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <lebel for="">কত দিন ধরে ব্যবসা করছেন</lebel>
            <div class="form-group ">
                <select class="" name="age">
                    <option>নির্বাচন করুন</option>
                    <option>নিজস্ব</option>
                    <option>পজিশন</option>
                    <option>ভাড়া</option>
                    <option>লীজ</option>
                    <option>অন্যান্য</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <input type="text" name="father/hasband_second_name" placeholder="বিক্রেতা সনদ নং">
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <div class=" row form-group form-inline">
        <div class="col-md-3">
            <lebel for="">কিস্তি</lebel>
            <select class="" name="father/hasband_title">
                <option>নির্বাচন করুন</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="col-md-2">
            <input type="text" name="father/hasband_first_name" placeholder="মাতার ১ম নামঃ">
        </div>
        <div class="col-md-2">
            <input type="text" name="father/hasband_second_name" placeholder="মাতার ২য় নামঃ">
        </div>
        <div class="col-md-2">
            <input type="text" name="father/hasband_second_name" placeholder="মাতার ২য় নামঃ">
        </div>
        <div class="col-md-3">
            <lebel for="">মাতার বয়স</lebel>
            <select class="" name="father/hasband_family_name">
                <option>নির্বাচন করুন</option>
                <option>30</option>
                <option>31</option>
                <option>32</option>
                <option>45</option>
            </select>
        </div>
    </div>
    <div class=" row form-group form-inline">
        <div class="col-md-3"> <lebel for="">বর্তমান ঠিকানাঃ</lebel></div>
        <div class="col-md-2">
            <lebel for="">দেশ</lebel>
            <select class="" name="father/hasband_title">
                <option>নির্বাচন করুন</option>
                <option>বাংলাদেশ</option>

            </select>
        </div>
        <div class="col-md-2">
            <lebel for="">জেলাঃ</lebel>
            <select class="" name="father/hasband_title">
                <option>নির্বাচন করুন</option>
                <option>পাবনা</option>

            </select>
        </div>
        <div class="col-md-2">
            <lebel for="">থানা</lebel>
            <select class="" name="father/hasband_title">
                <option>নির্বাচন করুন</option>
                <option>পাবনা</option>

            </select>
        </div>
        <div class="col-md-2">
            <lebel for="">ইউনিয়ন</lebel>
            <select class="" name="father/hasband_family_name">
                <option>নির্বাচন করুন</option>
                <option>আমিনপুর</option>
                <option>জহিরপুর</option>
                <option>দেবত্তর</option>

            </select>
        </div>
    </div>
    <div class="row">
        <div class=" col-md-offset-8 col-md-2 pull-right">
            <input id="search_submit_btn" ng-model="Save" type="submit" size="18" value="জমা দিন" onclick="search_payment_history()" class="button ">
        </div>
    </div>
</div>

