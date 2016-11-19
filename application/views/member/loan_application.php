<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 1%">
        <h1 class="text-aqua text-center">টিএমএসএস ইসলামিক মাইক্রো ফাইনান্স (TMSSIMF)</h1>
        <p class="text-blue text-center"><u>ঋণ আবেদন ফরম</u></p>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">

                <div class="box  box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">অনুসন্ধানঃ</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-4">

                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>জাতীয় পরিচয় পত্র</option>
                                        <option>মোবাইল নং</option>
                                        <option>নাম</option>

                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-4">
                                    <button type="button" class="btn btn-block btn-success">অনুসন্ধান করুন</button>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>


        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="box  box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">ভর্তি ইচ্ছুক সদস্যের ছবি</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="">
                                <div class="form-group col-lg-4">
                                    <div>
                                        <img style=" height: 100px; width: 100px;  " class="img-responsive"
                                             fallback-src="<?php echo base_url() ?>resources/images/add_photo_album.jpg"
                                             ng-src="<?php echo base_url() ?>resources/images/add_photo_album.jpg"/>
                                    </div>
                                    <div
                                        style="position: absolute; z-index: 11; top: 25px; height: 100px; width: 100px; background: transparent;overflow: hidden; ">
                                        <input class="profile_cover_upload_input" type="file" name="fileInput"
                                               id="fileInput"
                                               onchange="angular.element(this).scope().fileChanged(event)"/>
                                    </div>
                                    <div class="profile_cover_upload_img">
                                        <span>Upload a picture</span>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>


        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">ব্যাংক সংক্রান্ত তথ্য </h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>জোনঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>

                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>এলাকাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>

                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>শাখাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>

                                    </select>

                                </div>

                                <div class="form-group col-sm-3">
                                    <label>দলঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুণ</option>
                                        <option>চামেলী</option>
                                        <option>শিউলি</option>
                                        <option>বেলি</option>

                                    </select>

                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group date col-lg-3">
                                    <label>আবেদনের তারিখঃ</label>
                                    <input type="text" name="application_date" id="application_date"
                                           class="form-control" placeholder="আবেদনের তারিখ" style="width: 100%">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>সদস্য নম্বরঃ</label>
                                    <input type="text" name="member_no" class="form-control" placeholder="সদস্য নম্বর"
                                           style="width: 100%">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>গ্রুপ নাম্বার</label>
                                    <input type="text" name="group_no" class="form-control" placeholder="গ্রুপ নাম্বার"
                                           style="width: 100%">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>বিয়োগের দফাঃ</label>
                                    <input type="text" name="investment_step" class="form-control"
                                           placeholder="বিয়োগের দফা" style="width: 100%">
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group date col-lg-3">
                                    <label>বিনিয়োগের তারিখঃ</label>
                                    <input type="text" name="investment_date" id="investment_date" class="form-control"
                                           placeholder="বিনিয়োগের তারিখ" style="width: 100%">
                                </div>

                                <div class="form-group col-sm-9">
                                    <label>আবেদনের বিষয়ঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুণ</option>
                                        <option>বাই-মুয়াজ্জাল পদ্ধতিতে বিনিয়োগের আবেদন পত্র , গ্যারান্টি, মঞ্জুরী ও
                                            এগ্রিমেন্ট প্রসঙ্গে
                                        </option>
                                        <option>শিউলি</option>
                                        <option>বেলি</option>

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
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>মোঃ</option>
                                        <option>মোছাঃ</option>
                                        <option>শ্রীঃ</option>
                                        <option>শ্রীমতি</option>

                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
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
                                    <select class="form-control" name="gender_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পুরুষ</option>
                                        <option>মহিলা</option>
                                        <option>অন্যান্য</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বয়সঃ</label>
                                    <select class="form-control " name="age" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>

                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>শিক্ষাগত যোগ্যতা(সর্বোচ্চ)</label>
                                    <select class="form-control " name="educational_qualification"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>এস এস সি</option>
                                        <option>এইচ এস সি</option>
                                        <option>অনার্স</option>
                                        <option>মাস্টার্স</option>

                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>উত্তীর্ণ হওয়ার সাল</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>2008</option>
                                        <option>2009</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>

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
                                    <input type="text" class="form-control" name="father/hasband_first_name"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পিতার/স্বামীর ২য় নামঃ</label>
                                    <input type="text" class="form-control" name="father/hasband_second_name"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পারিবারিক নামঃ</label>
                                    <select class="form-control " name="member_spouse_family_name"
                                            style="width: 100%;">
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
                                    <input type="text" class="form-control" name="mother_first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>মাতার ২য় নামঃ</label>
                                    <input type="text" class="form-control" name="mother_second_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>মায়ের বয়সঃ</label>
                                    <select class="form-control " name="member_spouse_family_name"
                                            style="width: 100%;">
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

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>অভিভাবকের পেশা</label>
                                    <select class="form-control" name="father/hasband_profession"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>কৃষি</option>
                                        <option>চাকুরী</option>
                                        <option>ব্যবসা</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বৈবাহিক অবস্থাঃ</label>
                                    <select class="form-control" name="marital_status" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>বিবাহিত একক</option>
                                        <option>বিবাহিত বহু</option>
                                        <option>অবিবাহিত</option>
                                        <option>বিপত্নীক</option>
                                        <option>বিধবা</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>রাজনীতির সাথে জরিত কি না? </label>
                                    <select class="form-control" name="marital_status" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>হ্যাঁ</option>
                                        <option>না</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>জাতীয় পরিচয় পত্রের নংঃ </label>
                                    <input type="number" class="form-control" name="member_nid"
                                           placeholder="জাতীয় পরিচয় পত্রের নং"
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
                        <h3 class="box-title text-aqua"><u>সম্ভাব্য সদস্যের পারিবারিক তথ্য</u></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>পরিবারের সদস্য সংখ্যাঃ </label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>উপার্জনক্ষম পুরুষের সংখ্যা</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>উপার্জনক্ষম মহিলার সংখ্যা</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
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
                                           placeholder="টাকার পরিমানঃ  " style="width: 100%;">
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

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">সম্ভাব্য সদস্যের ব্যবসায়িক তথ্য </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>ব্যবসার নামঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="আবাদি জমি (শতক)" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ব্যবসার প্রকৃতিঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="ব্যবসার প্রকৃতিঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ব্যবসার অভিজ্ঞতাঃ(মাস) </label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="মাস" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ব্যবসা কেন্দ্রের ঠিকানাঃ </label>
                                    <textarea rows="2" class="form-control" name="business_future_plan"
                                              style="width: 100%;"></textarea>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-3">
                                    <label>বব্যবসা শুরুর তারিখঃ</label>
                                    <input type="date" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>অবকাঠামোঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাকা</option>
                                        <option>সেমি পাকা</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6 form-inline">
                                    <label>পরিমাপঃ </label>
                                    <input type="number" class="form-group" name="cultivable_land"
                                           placeholder="ফুট">
                                    <input type="number" class="form-group" name="cultivable_land"
                                           placeholder="ফুট">
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-sm-3">
                                    <label> দিকঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পূর্ব</option>
                                        <option>পশ্চিম</option>
                                        <option>উত্তর</option>
                                        <option>দক্ষিণ</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">

                                </div>
                                <div class="form-group col-sm-3">

                                </div>

                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>বব্যবসা স্থানঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নিজেস্ব</option>
                                        <option>পজিশন</option>
                                        <option>ভাড়া</option>
                                        <option>লীজ</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ট্রেড লাইসেন্স নংঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="১২৩৪৪৫৬৭" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>ইস্যুকারী কতৃপক্ষঃ </label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>ইউনিয়ন</option>
                                        <option>পৌরসভা</option>
                                        <option>সিটি কর্পোরেশন</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ট্রেড লাইসেন্সের মেয়াদঃ</label>
                                    <input type="date" class="form-control" name="cultivable_land"
                                           placeholder="ট্রেড লাইসেন্সের মেয়াদঃ" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>ব্যবসায় নিয়োজিত মূলধনঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="নিয়োজিত মূলধন" style="width: 100%;">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>মাসিক গড় বিক্রয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="গড় বিক্রয়" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">

                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">ব্যবসায় নিয়োজিত মূলধনের উৎসঃ</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>ব্যাংক(%)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>এন জি ও (%)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>নিজঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="নিজঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ধার/কর্জ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="ধার/কর্জ" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>বব্যবসা থেকে মাসিক আয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="বব্যবসা থেকে মাসিক আয়" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বব্যবসা থেকে মাসিক ব্যয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="বব্যবসা থেকে মাসিক ব্যয়" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>উদ্বৃত্তঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="উদ্বৃত্ত" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>অন্যান্য উৎস থেকে মাসিক আয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="অন্যান্য উৎস থেকে মাসিক আয়" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>অন্যান্য উৎসঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>চাকুরী</option>
                                        <option>অন্যত্র বিনিয়োগ</option>
                                        <option>জমি</option>
                                        <option>বাড়ী ভাড়া</option>
                                        <option>দোকান ভাড়া</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>অন্যান্য উৎস থেকে মাসিক ব্যয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="অন্যান্য উৎস মাসিক ব্যয়" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>উদ্বৃত্তঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="উদ্বৃত্ত" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">

                                    <label>সর্বমোট উদ্বৃত্তঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="সর্বমোট উদ্বৃত্ত" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">

                                </div>

                                <div class="form-group col-lg-3">

                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>ব্যবসার ধরনঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাইকারী</option>
                                        <option>খুচরা</option>
                                        <option>উৎপাদনকারী</option>
                                        <option>সরবরাহকারী</option>
                                        <option>প্রক্রিয়াজাতকারী</option>
                                        <option>কৃষি</option>
                                        <option>পরিবহন</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>অন্যান্যঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="অন্যান্য.........." style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <p class="text-red">প্রতিদিন ব্যবসায় নিয়োজিত সময়ঃ</p>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">


                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>১ম অর্ধ শুরুঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>১ম অর্ধ শেষঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>
                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>২য় অর্ধ শুরুঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="input-group col-lg-3 bootstrap-timepicker">
                                    <label>২য় অর্ধ শেষঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>মোট সময়ঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">

                                </div>
                                <div class="form-group col-lg-3">

                                </div>

                                <div class="form-group col-lg-3">


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">


                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>প্রতিদিন প্রতিষ্ঠান খোলা হয়ঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>প্রতিদিন প্রতিষ্ঠান বন্ধ হয়ঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>
                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>মাঝে বন্ধ শুরুঃ</label>
                                    <input type="text" class="form-control  timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3 bootstrap-timepicker">
                                    <label>মাঝে বন্ধ শেষঃ</label>
                                    <input type="text" class="form-control timepicker" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>সাপ্তাহিক বন্ধঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>শুক্রবার</option>
                                        <option>শনিবার</option>
                                        <option>রবিবার</option>
                                        <option>সোমবার</option>
                                        <option>মঙ্গলবার</option>
                                        <option>বুধবার</option>
                                        <option>বৃহস্পতিবার</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>প্রতিষ্ঠানে স্থায়ী জনবলের সংখ্যাঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="প্রতিষ্ঠানে স্থায়ী জনবলের সংখ্যা" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>প্রতিষ্ঠানে জনবলের সংখ্যা(পুরুষ)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="প্রতিষ্ঠানে জনবলের সংখ্যা(পুরুষ)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>প্রতিষ্ঠানে জনবলের সংখ্যা(মহিলা)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="প্রতিষ্ঠানে জনবলের সংখ্যা(মহিলা)" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>ব্যবসা পরিচালনাকারীঃ</label>
                                    <select class="form-control" name="member_previous_profession_duration"
                                            style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নিজে</option>
                                        <option>সন্তান</option>
                                        <option>আত্মীয়</option>
                                        <option>কর্মচারী</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>মহাজনের নামঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="মহাজনের নাম" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>মহাজনের ঠিকানাঃ </label>
                                    <textarea class="form-control" rows="2" name="mohajon_address"
                                              style="width: 100%"></textarea>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>মহাজনের মোবাইল/টেলিফোনঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="মহাজনের মোবাইল/টেলিফোনঃ" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-header with-border">
                        <p class="text-red">চাকুরী সংক্রান্ত তথ্যঃ </p>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>প্রতিষ্ঠানের নামঃ </label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="প্রতিষ্ঠানের নাম" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>প্রতিষ্ঠানের অবস্থানঃ</label>

                                    <textarea class="form-control" rows="2" name="mohajon_address" style="width: 100%">প্রতিষ্ঠানের অবস্থান</textarea>
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>প্রতিষ্ঠানের আইডি নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="প্রতিষ্ঠানের আইডি  নং" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>সেনা নংঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="সেনা নং" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>পদবীঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="পদবী" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>ইউনিটের নামঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="ইউনিটের নাম" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>ডিভিশনের নামঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="ডিভিশনের নাম" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>চাকুরীর বয়সঃ((মাস)</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="চাকুরীর বয়সঃ (মাস)" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>বেতন-ভাতাঃ (টাকা)</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="বেতন-ভাতাঃ (টাকা)" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">

                                </div>

                                <div class="form-group col-lg-3">

                                </div>

                                <div class="form-group col-sm-3">

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">Cash Flow/ অর্থ প্রবাহ বিবরণী (মাসিক সর্বনিম্ন)</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-header with-border">
                        <p class=" text-aqua">উদ্যোগ/ব্যবসার অর্থ প্রবাহঃ (এ ছকে শুধু মাত্র যে ব্যবসার জন্য বিনিয়োগ নিতে
                            আগ্রহী সেই ব্যবসার মাসিক গড় ক্যাশ প্রবাহের তথ্য যাবে)</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>সেবা পণ্য বিক্রয়ের বিবরণ </label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>টাকার পরিমাণঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="টাকার বিবরণ" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>কাঁচামাল ক্রয় ও খরচের বিবরণ </label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>টাকার পরিমাণঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="টাকার পরিমাণঃ" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-1">
                                    <button type="button" class="btn btn-info btn-flat "><i
                                            class="fa fa-plus-square"></i>Add More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th colspan="4" style="width: 50%">Cash Inflow (অর্থ আগমন)</th>
                            <th>Cash Outflow (অর্থ বহিঃরগমন)</th>
                        </tr>
                        <tr>
                            <th>ক্রমিক নং</th>
                            <th>সেবা/পণ্য বিক্রয়ের বিবরণ</th>
                            <th>টাকার পরিমাণ</th>
                            <th>ক্রমিক নং</th>
                            <th>কাঁচামাল ক্রয় ও খরচের বিবরণ</th>
                            <th>টাকার পরিমাণ</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                            <td>C</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">Cash Flow/ অর্থ প্রবাহ বিবরণী (মাসিক সর্বনিম্ন)</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-header with-border">
                        <p class=" text-aqua">সামগ্রীক অর্থ প্রবাহ ছকঃ (এ ছকে বিনিয়োগ নিতে
                            আগ্রহী ব্যক্তির সকল ধরনের আয়ের উৎসের মাসিক গড় ক্যাশ প্রবাহের তথ্য যাবে)</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>সেবা পণ্য বিক্রয়ের বিবরণ </label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>টাকার পরিমাণঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="টাকার বিবরণ" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>কাঁচামাল ক্রয় ও খরচের বিবরণ </label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>টাকার পরিমাণঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="টাকার পরিমাণঃ" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-1">
                                    <button type="button" class="btn btn-info btn-flat "><i
                                            class="fa fa-plus-square"></i>Add More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th colspan="4" style="width: 50%">Cash Inflow (অর্থ আগমন)</th>
                            <th>Cash Outflow (অর্থ বহিঃরগমন)</th>
                        </tr>
                        <tr>
                            <th>ক্রমিক নং</th>
                            <th>সেবা/পণ্য বিক্রয়ের বিবরণ</th>
                            <th>টাকার পরিমাণ</th>
                            <th>ক্রমিক নং</th>
                            <th>কাঁচামাল ক্রয় ও খরচের বিবরণ</th>
                            <th>টাকার পরিমাণ</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                            <td>C</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="box-header with-border">
                    <h3 class="box-title text-aqua">অত্র সংস্থা বা অন্য কোন আর্থিক প্রতিষ্ঠানে আবেদনকারীর বিনিয়োগের
                        তথ্যঃ</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="form-inline">

                            <div class="form-group col-lg-3">
                                <label>বিনিয়োগ দাতা প্রতিষ্ঠানের নামঃ</label>
                                <input type="text" class="form-control" name="cultivable_land"
                                       placeholder="বিনিয়োগ দাতা প্রতিষ্ঠানের নামঃ" style="width: 100%;">
                            </div>

                            <div class="form-group col-lg-3">
                                <label>বিনিয়োগ দাতা প্রতিষ্ঠানের ঠিকানাঃ</label>
                                <textarea class="form-control" name="org_address" style="width: 100%"></textarea>
                            </div>

                            <div class="form-group col-lg-3">
                                <label>গৃহীত বিনিয়োগ/ঋনের পরিমানঃ</label>
                                <input type="number" class="form-control" name="cultivable_land"
                                       placeholder="গৃহীত বিনিয়োগ/ঋনের পরিমানঃ" style="width: 100%;">
                            </div>

                            <div class="form-group col-sm-3">
                                <label>বিনিয়োগ সামগ্রীর নামঃ</label>
                                <input type="text" class="form-control" name="cultivable_land"
                                       placeholder="বিনিয়োগ সামগ্রীর নামঃ" style="width: 100%;">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="form-inline">

                            <div class="form-group col-lg-3">
                                <label>বিনিয়োগের দফা নংঃ</label>
                                <input type="text" class="form-control" name="cultivable_land"
                                       placeholder="বিনিয়োগের দফাঃ নংঃ" style="width: 100%;">
                            </div>

                            <div class="form-group col-lg-3">
                                <label>বিনিয়োগের মেয়াদঃ</label>
                                <input type="text" class="form-control" name="cultivable_land"
                                       placeholder="বিনিয়োগের মেয়াদঃ" style="width: 100%;">
                            </div>

                            <div class="form-group col-lg-3">
                                <label>বিনিয়োগ/ঋণ গ্রহনের তাংঃ</label>
                                <input type="date" class="form-control" name="cultivable_land"
                                       placeholder="" style="width: 100%;">
                            </div>

                            <div class="form-group col-sm-3">
                                <label>এ পর্যন্ত পরিশোধঃ</label>
                                <input type="number" class="form-control" name="cultivable_land"
                                       placeholder="এ পর্যন্ত পরিশোধঃ" style="width: 100%;">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="form-inline">

                            <div class="form-group col-lg-3">
                                <label>বর্তমান স্থিতিঃ </label>
                                <input type="text" class="form-control" name="cultivable_land"
                                       placeholder="বর্তমান স্থিতিঃ " style="width: 100%;">
                            </div>

                            <div class="form-group col-lg-3">
                                <label>অবশিষ্ট কিস্তি সংখ্যাঃ</label>
                                <input type="number" class="form-control" name="cultivable_land"
                                       placeholder="অবশিষ্ট কিস্তি সংখ্যাঃ" style="width: 100%;">
                            </div>

                            <div class="form-group col-lg-3">
                                <label>সম্ভাব্য পরিশোধের তারিখঃ</label>
                                <input type="date" class="form-control" name="cultivable_land"
                                       placeholder="" style="width: 100%;">
                            </div>

                            <div class="form-group col-sm-3">

                            </div>

                        </div>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">উদ্যোক্তার মাসিক আয়/ব্যয় বিবরণীঃ</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>বিবরণঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>মোট আয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="টাকা" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>মোট ব্যয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="টাকা" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>নীট আয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="নীট আয় টাকা" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-1">
                                    <button type="button" class="btn btn-info btn-flat "><i
                                            class="fa fa-plus-square"></i>Add More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ক্রমিক নং</th>
                            <th>বিবরণ</th>
                            <th>মোট আয়</th>
                            <th>মোট ব্যয়</th>
                            <th>নীট আয়</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>

                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>

                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">দাখিলকৃত দলিল ও কাগজপত্রাদিঃ
                            <small>(জমা সাপেক্ষে ডান পার্শের ঘরে টিক চিনহ দিন)</small>
                        </h3>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                            <td> 2</td>
                            <td>খাজনার DCR</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                            <td> 4</td>
                            <td>খাজনার DCR</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                            <td> 6</td>
                            <td>খাজনার DCR</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                            <td> 8</td>
                            <td>খাজনার DCR</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                            <td> 10</td>
                            <td>খাজনার DCR</td>
                            <td><input type="checkbox" name="checkbox" value=""></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">সদস্যের সম্পদ ও দেনার বিবরণী</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>দেনার বিবরণঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>টাকা</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="টাকা" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>সম্পদের বিবরণঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label>টাকা</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="টাকা" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-1">
                                    <button type="button" class="btn btn-info btn-flat "><i
                                            class="fa fa-plus-square"></i>Add More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>

                            <th>দেনার বিবরণ</th>
                            <th>টাকার পরিমাণ</th>

                            <th>সম্পদের বিবরণ</th>
                            <th>টাকার পরিমাণ</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td>123</td>

                            <td>খাজনার DCR</td>
                            <td>1223</td>
                        </tr>
                        <tr>

                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td>123</td>

                            <td>খাজনার DCR</td>
                            <td>123</td>
                        </tr>
                        <tr>

                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td>123</td>

                            <td>খাজনার DCR</td>
                            <td>123</td>
                        </tr>
                        <tr>

                            <td>মূল দলিল/দলিলের রশিদ</td>
                            <td>123</td>

                            <td>খাজনার DCR</td>
                            <td>123</td>
                        </tr>
                        <tr>

                            <td class="pull-right">মোট=</td>
                            <td>123</td>

                            <td class="pull-right">মোট=</td>
                            <td>123</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">জামানত সংক্রান্ত তথ্য </h3>
                        <p class="text-red">ডীড/পজিশনঃ</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-4">
                                    <label>মূল্যঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="টাকা" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>মেয়াদ (বছর)ঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="মেয়াদ" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>সাল পরযন্তঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুণ</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-header">
                        <p class="text-aqua">জমির দলিলঃ</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>মৌজাঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="মৌজাঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>সিএস খতিয়ান নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="সিএস খতিয়ান নংঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>হাল খতিয়ান নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="হাল খতিয়ান নংঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>আরএস/ডিপি খতিয়ান নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="আরএস/ডিপি খতিয়ান নংঃ" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-sm-3">
                                    <label>সিএস দাগ নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="সিএস দাগ নংঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>হাল দাগ নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="হাল খতিয়ান নংঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>জে এল নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="জে এল নংঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>হোল্ডিং নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="হোল্ডিং  নংঃ" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-sm-3">
                                    <label>জমির পরিমানঃ(শতক)</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="জমির পরিমানঃ(শতক)" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>আনুমানিক মুল্যঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="আনুমানিক মুল্যঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>জমির মালিকানাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুণ</option>
                                        <option>সদস্য</option>
                                        <option>অভিভাবক</option>
                                        <option>জমিনদার</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-header">
                        <p class="text-aqua">অগ্রীম/চেকঃ</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-sm-3">
                                    <label>ব্যাংকের নামঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="ব্যাংকের নামঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>শাখার নামঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="শাখার নামঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>হিসাব নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="হিসাব নংঃ" style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">জামিনদার সংক্রান্ত তথ্য </h3>
                        <p class="text-red">১ম জামিনদারঃ</p>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>নামঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>মোঃ</option>
                                        <option>মোছাঃ</option>
                                        <option>শ্রীঃ</option>
                                        <option>শ্রীমতি</option>

                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
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
                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর নামঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>মোঃ</option>
                                        <option>শ্রীঃ</option>
                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর ১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর ২য় নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর পারিবারিক নামঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>শেখ</option>
                                        <option>মোল্লা</option>
                                        <option>খান</option>
                                        <option>সরদার</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="box-header">
                        <p class="text-aqua">ঠিকানাঃ</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>জেলাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>থানাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ইউনিয়নঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ডাকঘরঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>গ্রাম/মহল্লাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বয়সঃ(বছর)</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>২০</option>
                                        <option>২৫</option>
                                        <option>৩০</option>
                                        <option>৩৫</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>সর্বোচ্চ শিক্ষাগত যোগ্যতাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>অষ্টম শ্রেণী</option>
                                        <option>এস এস সি</option>
                                        <option>এইচ এস সি</option>
                                        <option>অনার্স</option>
                                        <option>ডিগ্রী</option>
                                        <option>মাস্টার্স</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পেশাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>কৃষি</option>
                                        <option>চাকুরী</option>
                                        <option>ব্যবসা</option>
                                        <option>অন্যান্য</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>মোবাইল নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="মোবাইল নংঃ" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>সদস্যের সাথে সম্পর্কঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পিতা</option>
                                        <option>মাতা</option>
                                        <option>ভাই</option>
                                        <option>বন্ধু</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>জামিনদারের বার্ষিক নীট আয়</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="জামিনদারের বার্ষিক নীট আয়" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-6">
                                    <label>জামিনদারের সামাজিক অবস্থাঃ</label>
                                    <textarea name="social_status_of_guarantor" style="width: 100%"></textarea>
                                </div>

                                <div class="form-group col-sm-3">

                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">জামিনদার সংক্রান্ত তথ্য </h3>
                        <p class="text-red">২য় জামিনদারঃ</p>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>নামঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>মোঃ</option>
                                        <option>মোছাঃ</option>
                                        <option>শ্রীঃ</option>
                                        <option>শ্রীমতি</option>

                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
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
                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর নামঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>মোঃ</option>
                                        <option>শ্রীঃ</option>
                                    </select>

                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর ১ম নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর ২য় নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পিতা/স্বামীর পারিবারিক নামঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>শেখ</option>
                                        <option>মোল্লা</option>
                                        <option>খান</option>
                                        <option>সরদার</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="box-header">
                        <p class="text-aqua">ঠিকানাঃ</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>জেলাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>থানাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>ইউনিয়নঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ডাকঘরঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>গ্রাম/মহল্লাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পাবনা</option>
                                        <option>নাটোর</option>
                                        <option>গাজীপুর</option>
                                        <option>ঢাকা</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বয়সঃ(বছর)</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>২০</option>
                                        <option>২৫</option>
                                        <option>৩০</option>
                                        <option>৩৫</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>সর্বোচ্চ শিক্ষাগত যোগ্যতাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>অষ্টম শ্রেণী</option>
                                        <option>এস এস সি</option>
                                        <option>এইচ এস সি</option>
                                        <option>অনার্স</option>
                                        <option>ডিগ্রী</option>
                                        <option>মাস্টার্স</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পেশাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>কৃষি</option>
                                        <option>চাকুরী</option>
                                        <option>ব্যবসা</option>
                                        <option>অন্যান্য</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>মোবাইল নংঃ</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="মোবাইল নংঃ" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>সদস্যের সাথে সম্পর্কঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>পিতা</option>
                                        <option>মাতা</option>
                                        <option>ভাই</option>
                                        <option>বন্ধু</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>জামিনদারের বার্ষিক নীট আয়</label>
                                    <input type="text" class="form-control" name="cultivable_land"
                                           placeholder="জামিনদারের বার্ষিক নীট আয়" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-6">
                                    <label>জামিনদারের সামাজিক অবস্থাঃ</label>
                                    <textarea name="social_status_of_guarantor" style="width: 100%"></textarea>
                                </div>

                                <div class="form-group col-sm-3">

                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">পূর্বের বিনিয়োগের তথ্য</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>প্রকল্প/ব্যবসা/কর্মকাণ্ডের নামঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder=""
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>ধরণঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="ধরণঃ"
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>গৃহীত বিনিয়োগের পরিমাণঃ</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="গৃহীত বিনিয়োগের পরিমাণঃ"
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>দফাঃ</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="দফাঃ"
                                           style="width: 100%;">
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>বিনিয়োগের গ্রহনের তারিখঃ</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="বিনিয়োগের গ্রহনের তারিখঃ"
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>পরিশোধের তারিখঃ</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="পরিশোধের তারিখঃ"
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>পরিশোধ প্রবণতাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">নির্বাচন করুন</option>
                                        <option>নিয়মিত</option>
                                        <option>অনিয়মিত</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>অগ্রীম কিস্তি প্রদানের সংখ্যাঃ</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="অগ্রীম কিস্তি প্রদানের সংখ্যাঃ"
                                           style="width: 100%;">
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>টাকার পরিমাণঃ</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="টাকার পরিমাণঃ"
                                           style="width: 100%;">
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">

                                </div>

                                <div class="form-group col-sm-3">

                                </div>
                                <div class="form-group col-sm-3">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">সঞ্চয় স্থিতিঃ</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>সাধারণ(টাকা)</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="সাধারণ(টাকা)"
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বিশেষ(টাকা)</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="বিশেষ(টাকা)"
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>টিএসএস(টাকা)</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="টিএসএস(টাকা)"
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>মোট(টাকা)</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="মোট(টাকা)"
                                           style="width: 100%;">
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title text-aqua">আবেদনকৃত বিনিয়োগের পরিমান</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-3">
                                    <label>টাকা</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="টাকা"
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>কথায়</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="কথায়"
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label>বিনিয়োগের মেয়াদ (বছর)</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="বিনিয়োগের মেয়াদ (বছর)"
                                           style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>বিনিয়োগের দফাঃ</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="বিনিয়োগের দফাঃ"
                                           style="width: 100%;">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-sm-5">
                                    <label>বিনিয়োগের প্রকল্প/কর্মকাণ্ডের নামঃ</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="বিনিয়োগের প্রকল্প/কর্মকাণ্ডের নামঃ"
                                           style="width: 100%;">
                                </div>

                                <div class="form-group col-sm-9">

                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class="row">

            <div class="col-md-12">

                <div class="box-body">
                    <div class="col-sm-2 pull-right">
                        <button type="button" class="btn btn-info btn-flat ">Save</button>
                    </div>
                </div>

            </div>


        </div>

    </section>
    <!-- /.content -->
</div>

<script>
    $(function () {

        $('#application_date').datepicker({
            autoclose: true
        });

        $('#investment_date').datepicker({
            autoclose: true
        });

        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>