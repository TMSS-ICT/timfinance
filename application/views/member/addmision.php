<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 1%">
        <h1 class="text-aqua text-center">টিএমএসএস ইসলামিক মাইক্রো ফাইনান্স (TMSSIMF)</h1>
        <p class="text-blue text-center"><u>ভর্তি ফরম</u></p>
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
                                        <img  style=" height: 100px; width: 100px;  " class="img-responsive" fallback-src="<?php echo base_url() ?>resources/images/add_photo_album.jpg"  ng-src="<?php echo base_url() ?>resources/images/add_photo_album.jpg"/>
                                    </div>
                                    <div style="position: absolute; z-index: 11; top: 25px; height: 100px; width: 100px; background: transparent;overflow: hidden; ">
                                        <input  class="profile_cover_upload_input"  type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)"/>
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
                    <!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">
                                <div class="form-group col-lg-4">
                                    <label>জোনঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>

                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>এলাকাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>

                                    </select>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label>শাখাঃ</label>
                                    <select class="form-control " name="zone_name" style="width: 100%;">
                                        <option selected="selected">ঢাকা</option>
                                        <option>পাবনা</option>
                                        <option>বগুড়া</option>
                                        <option>নাটোর</option>

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
                                    <label>২য় নামঃ</label>
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
                                    <label>ব্যবসায় নিয়োজিত মূলধনঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="নিয়োজিত মূলধন" style="width: 100%;">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form-group col-lg-3">
                                    <label>মাসিক গড় বিক্রয়ঃ</label>
                                    <input type="number" class="form-control" name="cultivable_land"
                                           placeholder="গড় বিক্রয়" style="width: 100%;">
                                </div>
                                <div class="form-group col-sm-3">

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


                                <div class="form-group col-lg-3">
                                    <label>১ম অর্ধ শুরুঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>১ম অর্ধ শেষঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>২য় অর্ধ শুরুঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>২য় অর্ধ শেষঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
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
                                    <label>মোট সময়ঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">

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
                                    <label>প্রতিদিন প্রতিষ্ঠান খোলা হয়ঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>প্রতিদিন প্রতিষ্ঠান বন্ধ হয়ঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>মাঝে বন্ধ শুরুঃ</label>
                                    <input type="time" class="form-control " name="cultivable_land"
                                           placeholder="" style="width: 100%;">
                                </div>

                                <div class="form-group col-lg-3">
                                    <label>মাঝে বন্ধ শেষঃ</label>
                                    <input type="time" class="form-control" name="cultivable_land"
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