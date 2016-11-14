<div class="content-wrapper" ng-controller="memberController">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 1%">
        <h1 class="text-center">টিএমএসএস ইসলামিক মাইক্রো ফাইনান্স (TMSS)</h1>
        <p class="text-blue text-center"><u>TIMF প্রকল্প এলাকার জনগনের তথ্য বিবরণী</u></p>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">ব্যাংক সংক্রান্ত তথ্য </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-4" ng-init="setZoneList('<?php echo htmlspecialchars(json_encode($zone_list)) ?>')">
                                    <label>জোনঃ</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.zoneId" style="width: 100%;">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="zoneInfo in zoneList" value={{zoneInfo.id}} >{{zoneInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4" ng-init="setAreaList('<?php echo htmlspecialchars(json_encode($area_list)) ?>')">
                                    <label>এলাকাঃ</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.areaId" style="width: 100%;">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="areaInfo in areaList" value={{areaInfo.id}} >{{areaInfo.name}}</option>

                                    </select>
                                </div>

                                <div class="form-group col-sm-4" ng-init="setBranchList('<?php echo htmlspecialchars(json_encode($branch_list)) ?>')">
                                    <label>শাখাঃ</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.branchId" style="width: 100%;">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="branchInfo in branchList" value={{branchInfo.id}} >{{branchInfo.name}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>


        </div>
        <div class="row">

            <div class="col-md-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">সম্ভাব্য সদস্যের ব্যক্তিগত তথ্য</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>নামঃ</label>
                                    <select class="form-control " name="zone_name" ng-model="memberSurveyInfo.genderId" style="width: 100%;" ng-init="setGenderList('<?php echo htmlspecialchars(json_encode($gender_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="genderInfo in genderList" value={{genderInfo.id}} >{{genderInfo.name}}</option>
                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.firstName" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.lastName"  name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পারিবারিক নামঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>মোঃ</option>
                                        <option>মোছাঃ</option>
                                        <option>শ্রীঃ</option>
                                        <option>শ্রীমতি</option>

                                    </select>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>লিঙ্গঃ</label>
                                    <select class="form-control" ng-model="memberSurveyInfo.genderId" style="width: 100%;"ng-init="setGenderList('<?php echo htmlspecialchars(json_encode($gender_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="genderInfo in genderList" value={{genderInfo.id}} >{{genderInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বয়সঃ</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.age" style="width: 100%;" ng-init="setAgeList('<?php echo htmlspecialchars(json_encode($age_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="ageInfo in ageList" value={{ageInfo.id}} >{{ageInfo.name}}</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>শিক্ষাগত যোগ্যতা(সর্বোচ্চ)</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.educationId" 
                                            style="width: 100%;"ng-init="setEducationList('<?php echo htmlspecialchars(json_encode($educations_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="educationInfo in educationList" value={{educationInfo.id}} >{{educationInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>উত্তীর্ণ হওয়ার সাল</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.passingYear"  style="width: 100%;" ng-init="setYearList('<?php echo htmlspecialchars(json_encode($passing_year_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="yearInfo in yearList" value={{yearInfo.id}} >{{yearInfo.name}}</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>পিতা/স্বামীর নামঃ</label>
                                    <select class="form-control" name="father/hasband_title" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নির্বাচন করুন</option>
                                        <option>মোঃ</option>
                                        <option>শ্রী</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পিতার/স্বামীর ১ম নামঃ</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.fFirstName" 
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পিতার/স্বামীর ২য় নামঃ</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.fLastName" 
                                           placeholder="" style="width: 100%;">
                                </div>

                                 <div class="form-group col-sm-3">
                                    <label>মায়ের বয়সঃ</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.fAge">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="ageInfo in ageList" value={{ageInfo.id}} >{{ageInfo.name}}</option>
                                    </select>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>মাতার নামঃ</label>
                                    <select class="form-control" name="father/hasband_title" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নির্বাচন করুন</option>
                                        <option>মোছাঃ</option>
                                        <option>শ্রীমতী</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>মাতার নামঃ</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.mFrstName"  placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>মাতার ২য় নামঃ</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.mLastName" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>মায়ের বয়সঃ</label>
                                    <select class="form-control " ng-model="memberSurveyInfo.mAge">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="ageInfo in ageList" value={{ageInfo.id}} >{{ageInfo.name}}</option>
                                    </select>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>অভিভাবকের পেশা</label>
                                    <select class="form-control"  ng-model="memberSurveyInfo.gProfessionId" 
                                            style="width: 100%;" ng-init="setProfessionList('<?php echo htmlspecialchars(json_encode($profession_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="professionInfo in proList" value={{professionInfo.id}} >{{professionInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বৈবাহিক অবস্থাঃ</label>
                                    <select class="form-control" ng-model="memberSurveyInfo.maritalId" style="width: 100%;" ng-init="setMaritalList('<?php echo htmlspecialchars(json_encode($marital_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="maritalInfo in maritalList" value={{maritalInfo.id}} >{{maritalInfo.name}}</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>রাজনীতির সাথে জরিত কি না? </label>
                                    <select class="form-control" style="width: 100%;"ng-model="memberSurveyInfo.politicalStatusId" style="width: 100%;" ng-init="setPSList('<?php echo htmlspecialchars(json_encode($political_status_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="pStatusInfo in politicalStatusList" value={{pStatusInfo.id}} >{{pStatusInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>জাতীয় পরিচয় পত্রের নংঃ </label>
                                    <input type="number" class="form-control" ng-model="memberController.nid" placeholder="জাতীয় পরিচয় পত্রের নং"
                                           style="width: 100%;">
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua"><u>সম্ভাব্য সদস্যের বর্তমান ঠিকানা</u></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>দেশ</label>
                                    <select class="form-control" ng-model="memberSurveyInfo.countryId" style="width: 100%;" ng-model="memberSurveyInfo.politicalStatusId" style="width: 100%;" ng-init="setCountryList('<?php echo htmlspecialchars(json_encode($country_list)) ?>')">
                                       <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="countryInfo in countryList" value={{countryInfo.id}} >{{countryInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>জেলাঃ</label>
                                    <select class="form-control " name="age" style="width: 100%;" ng-model="memberSurveyInfo.mDistrictId" style="width: 100%;" ng-init="setDistrictList('<?php echo htmlspecialchars(json_encode($district_list)) ?>')">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="districtInfo in districtList" value={{districtInfo.id}} >{{districtInfo.name}}</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>থানাঃ</label>
                                    <select class="form-control " name="educational_qualification"
                                            style="width: 100%;" ng-model="memberSurveyInfo.mThanaId" style="width: 100%;" ng-init="setThanaList('<?php echo htmlspecialchars(json_encode($thana_list)) ?>')">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="thanaInfo in thanaList" value={{thanaInfo.id}} >{{thanaInfo.name}}</option>
                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ইউনিয়নঃ</label>
                                    <select class="form-control "  style="width: 100%;"ng-model="memberSurveyInfo.mUnion" ng-init="setUnionList('<?php echo htmlspecialchars(json_encode($union_list)) ?>')">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="unionInfo in unionList" value={{unionInfo.id}} >{{unionInfo.name}}</option>
                                    </select>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>পোষ্ট অফিসঃ</label>
                                  <select class="form-control "  style="width: 100%;"ng-model="memberSurveyInfo.mPostId" ng-init="setPostList('<?php echo htmlspecialchars(json_encode($post_list)) ?>')">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="postInfo in postList" value={{postInfo.id}} >{{postInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>গ্রাম বা মহল্লাঃ</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.mVill" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>রাস্তা নং</label>
                                    <input type="text" class="form-control" ng-model="memberSurveyInfo.mRoad" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua"><u>সম্ভাব্য সদস্যের পারিবারিক তথ্য</u></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>পরিবারের সদস্য সংখ্যাঃ </label>
                                    <select class="form-control " style="width: 100%;" ng-model="memberSurveyInfo.totalMemberNo" ng-init="setMemberList('<?php echo htmlspecialchars(json_encode($member_list)) ?>')">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="memberInfo in memberList" value={{memberInfo.id}} >{{memberInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>উপার্জনক্ষম পুরুষের সংখ্যা</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;" ng-model="memberSurveyInfo.earnedMMNo" ng-init="setMemberList('<?php echo htmlspecialchars(json_encode($member_list)) ?>')">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="memberInfo in memberList" value={{memberInfo.id}} >{{memberInfo.name}}</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>উপার্জনক্ষম মহিলার সংখ্যা</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;"ng-model="memberSurveyInfo.earnedFMNo">
                                        <option value="">নির্বাচন করুন</option>/option>
                                        <option ng-repeat="memberInfo in memberList" value={{memberInfo.id}} >{{memberInfo.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua"><u>সম্ভাব্য সদস্যের স্থায়ী ঠিকানা</u></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>দেশ</label>
                                    <select class="form-control" name="country_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>বাংলাদেশ</option>
                                        <option>ভারত</option>
                                        <option>পাকিস্তান</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>জেলাঃ</label>
                                    <select class="form-control " name="age" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>রাজশাহী</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>থানাঃ</label>
                                    <select class="form-control " name="educational_qualification"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>রাজশাহী</option>
                                        <option>নাটোর</option>
                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ইউনিয়নঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>আমিনপুর</option>
                                        <option>জহিরপুর</option>
                                        <option>দেবত্তর</option>

                                    </select>

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>পোষ্ট অফিসঃ</label>
                                    <input type="text" class="form-control" name="mother_first_name" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>গ্রাম বা মহল্লাঃ</label>
                                    <input type="text" class="form-control" name="mother_first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>রাস্তা নং</label>
                                    <input type="text" class="form-control" name="mother_first_name" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua"><u>যোগাযোগঃ</u></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>মোবাইল নংঃ </label>
                                    <input type="number" class="form-control" name="member_mobile" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ইমেইলঃ </label>
                                    <input type="email" class="form-control" name="member_email" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>অভিভাবকের মোবাইল নংঃ </label>
                                    <input type="number" class="form-control" name="spouse_mobile" placeholder=""
                                           style="width: 100%;">

                                </div>
                                <div class="form-group col-lg-3">
                                    <label>শাখা অফিসের দুরুত্ব (কিঃ মিঃ)</label>
                                    <select class="form-control" name="distance" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua"><u>সদস্যের পেশা সংক্রান্ত তথ্যঃ </u></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-sm-3">
                                    <label>পেশা</label>
                                    <select class="form-control" name="member_profession" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নির্বাচন করুন</option>
                                        <option>কৃষি</option>
                                        <option>চাকুরী</option>
                                        <option>ব্যাবসা</option>
                                        <option>অন্যান্য</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>বর্তমান পেশার পূর্বে তিনি কি করতেন</label>
                                    <select class="form-control" name="member_profession" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নির্বাচন করুন</option>
                                        <option>কৃষি</option>
                                        <option>চাকুরী</option>
                                        <option>ব্যাবসা</option>
                                        <option>অন্যান্য</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>বর্তমান পেশার পূর্বে তিনি কি করতেন</label>
                                    <select class="form-control" name="member_previous_profession"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নির্বাচন করুন</option>
                                        <option>কৃষি</option>
                                        <option>চাকুরী</option>
                                        <option>ব্যাবসা</option>
                                        <option>অন্যান্য</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>সেই পেশায় কতদিন নিয়োজিত ছিলেন(মাস)</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নির্বাচন করুন</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-sm-3">
                                    <label>ব্যবসা/চাকুরী করে অর্জিত সম্পদের বিবরণঃ</label>
                                    <textarea rows="3" class="form-control" name="alternative_earning_source"
                                              style="width: 100%;"></textarea>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ব্যবসা ছাড়া আয়ের উৎস থাকলে তার বিবরণঃ</label>
                                    <textarea rows="3" class="form-control" name="alternative_earning_source"
                                              style="width: 100%;"></textarea>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ব্যবসার ধরনঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>একক মালিকানা</option>
                                        <option>অংশীদারি</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ব্যবসার ভবিষ্যৎ পরিকল্পনাঃ</label>
                                    <textarea rows="3" class="form-control" name="business_future_plan"
                                              style="width: 100%;"></textarea>
                                </div>

                            </div>


                        </div>
                    </div>


                </div>

            </div>


        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">সম্ভাব্য সদস্যের জমির পরিমান</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-4">
                                    <label>আবাদি জমি (শতক)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="আবাদি জমি (শতক)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>অনাবাদি জমি (শতক)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="অনাবাদি জমি (শতক)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>পুকুর (শতক)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="পুকুর (শতক)" style="width: 100%;">
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-4">
                                    <label>বসত বাড়ী(শতক)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="বসত বাড়ী (শতক)" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>মোট জমি (শতক)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="মোট জমি (শতক)" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-4">

                                </div>


                            </div>


                        </div>
                    </div>


                </div>
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">সম্ভাব্য সদস্যের বাৎসরিক মোট আয় ও ব্যয়</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-4">
                                    <label>কৃষিজ আয় (টাকা)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="কৃষিজ আয় (টাকা)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>অকৃষিজ আয় (টাকা)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="অকৃষিজ আয় (টাকা)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>মোট আয় (টাকা)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="মোট আয় (টাকা)" style="width: 100%;">
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-4">
                                    <label>মোট ব্যয় (টাকা)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="মোট ব্যয় (টাকা)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>উদ্বৃত্ত/ঘাটতি (টাকা)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="উদ্বৃত্ত/ঘাটতি (টাকা)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                </div>

                            </div>


                        </div>
                    </div>


                </div>
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">পরিবারের গৃহের ধরনঃ</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-4">
                                    <label>টিনের ঘর (কত টি?)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="টিনের ঘর (কত টি?)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>খড়ের ঘর (কত টি?)</label>
                                    <input type="number" class="form-control" name="non_cultivable_land"
                                           placeholder="খড়ের ঘর (কত টি?)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>ইটের ঘর (কত টি?)</label>
                                    <input type="number" class="form-control" name="pond" placeholder="ইটের ঘর (কত টি?)"
                                           style="width: 100%;">
                                </div>

                            </div>


                        </div>
                    </div>

                </div>

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">বিনিয়োগ সংক্রান্ত তথ্যঃ </h3>
                        <h5 class="text-red">সম্ভাব্য সদস্য যোদি কোন এন জি ও / ব্যাংক থেকে বিনিয়োগ/ঋণ গ্রহন করে থাকে
                            তাহলে নিম্ন লিখিত তথ্য গুলো প্রদান করবে </h5>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>গৃহীত টাকার পরিমাণ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="গৃহীত টাকার পরিমাণ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পরিশোধিত টাকার পরিমাণ</label>
                                    <input type="number" class="form-control" name="non_cultivable_land"
                                           placeholder="পরিশোধিত টাকার পরিমাণ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>অবশিষ্ট টাকার পরিমাণ</label>
                                    <input type="number" class="form-control" name="pond"
                                           placeholder="অবশিষ্ট টাকার পরিমাণ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পরিশোধের ধরণঃ </label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নিয়োমিত</option>
                                        <option>ঋণ খেলাপি</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">

                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>লগ্নীকারী প্রতিষ্ঠানের নামঃ</label>
                                    <input type="text" class="form-control" name="house"
                                           placeholder="লগ্নীকারী প্রতিষ্ঠানের নাম " style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>কতদিন যাবৎ গ্রহন করছেন (মাস)</label>
                                    <input type="number" class="form-control" name="house"
                                           placeholder="কতদিন যাবৎ গ্রহন করছেন" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>সর্বশেষ কবে গ্রহণ করেছেন </label>
                                    <input type="date" class="form-control" name="cultivable_land"
                                           placeholder="সর্বশেষ কবে গ্রহণ করেছেন " style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="box-header">
                        <h5 class="text-red">সম্ভাব্য সদস্য যোদি TIMF থেকে বিনিয়োগ/ঋণ গ্রহন করতে আগ্রহী হয় তাহলে নিম্ন
                            লিখিত তথ্য গুলো প্রদান করবে </h5>
                    </div>
                    <div class="box-body">
                        <div class="row">

                            <div class="form-inline">
                                <div class="form-group col-sm-4">
                                    <label>বিনিয়োগ/ঋণ গ্রহন করতে আগ্রহী কি না-</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নির্বাচন করুন</option>
                                        <option>হ্যাঁ</option>
                                        <option>না</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>বিনিয়োগের খাতঃ </label>
                                    <input type="text" class="form-control" name="house"
                                           placeholder="বিনিয়োগের খাত " style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>টাকার পরিমানঃ </label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="সর্বশেষ কবে গ্রহণ করেছেন " style="width: 100%;">
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="box-header">
                        <h5 class="text-red">দুই জন নিকটতম ব্যবসায়ীর ঋণ গ্রহন সম্পর্কে মন্তব্যঃ </h5>
                    </div>
                    <div class="box-body">
                        <div class="row">

                            <div class="form-inline">
                                <div class="form-group col-sm-6">
                                    <label>প্রথম ব্যক্তির মন্তব্যঃ </label>
                                    <textarea rows="3" class="form-control" name="business_future_plan"
                                              style="width: 100%;"></textarea>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label>দ্বিতীয় ব্যক্তির মন্তব্যঃ </label>
                                    <textarea rows="3" class="form-control" name="business_future_plan"
                                              style="width: 100%;"></textarea>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>

            </div>


        </div>

        <div class="row">

            <div class="col-md-12">


                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="col-sm-2 pull-right">
                        <button type="button" class="btn btn-info btn-flat " ng-click="Test()"> Save</button>
                    </div>
                </div>


            </div>


        </div>


    </section>
    <!-- /.content -->
</div>