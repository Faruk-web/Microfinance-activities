
 @extends('fontand.master')
  @section('main_contant')
  <div class="main">
      <div class="container reg-form">
        <h3 class="text-center">মহিলাদের আত্ম-কর্মসংস্থাপনের জন্য ক্ষুদ্রঋণ কার্যক্রম</h3>
        <ul>
              <li>(ঋণ প্রদানের ক্ষেত্রে মহিলা বিষয়ক অধিদপ্তর এবং জাতীয় মহিলা সংস্থা থেকে বিভিন্ন বিষয়ে প্রশিক্ষণ প্রাপ্ত মহিলা/দুঃস্থ/স্বামী পরিত্যক্তা/বিধবা/অবিবাহিত মহিলাদের অগ্রাধিকার প্রদান করা হবে। কোন সরকারী/বেসরকারী প্রতিষ্ঠান হতে ঋণ গ্রহণ করে থাকলে এবং তা চলমান হলে এ কার্যক্রমের আওতায় ঋণ প্রদান করা যাবে না)।</li><br>
            </ul>
        <div class="row">
          <div class="col-md-12">
            <ul>
                <li> # ঋণ প্রার্থীর ভিটে-বাড়ি থাকতে হবে। </li>
                <li> # অত্র এলাকার বাসিন্দা হতে হবে।</li>
                <li> # ন্যূনতম অক্ষরজ্ঞান থাকতে হবে।</li>
                <li> # বয়সসীমা ১৮-৫৫ বছর মধ্যে হতে  হবে।</li>
                <li> # ঋণ প্রার্থীর এককভাবে আবেদন করতে হবে।</li>
            </ul>
                  <br>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
           <h3 class="text-center">ঋণ প্রাপ্তির আবেদনপত্র</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <form action="{{route('application.store') }}" method="POST">
            @csrf
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label for="centerName" class="requred-field">আবেদন জমাদানের অফিস : </label>
                    <select wire:model="centerName" id="centerName" name="centerName" class="form-control ">
                      <option value="" selected>নির্বাচন করুন...</option>
                      <option value="মহিলা বিষয়ক অধিদপ্তর">মহিলা বিষয়ক অধিদপ্তর</option>
                      <option value="জাতীয় মহিলা সংস্থা">জাতীয় মহিলা সংস্থা</option>                      
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                   <label for="subcenterName" class="requred-field">জামাদান কেন্দ্র : </label>
                    <select wire:model="subcenterName" id="subcenterName" name="subcenterName" class="form-control ">
                      <option value="" selected>নির্বাচন করুন...</option>
                      <option value="জেলা মহিলা বিষয়ক কার্যালয়">জেলা মহিলা বিষয়ক কার্যালয়</option>
                      <option value="উপজেলা মহিলা বিষয়ক কার্যালয়">উপজেলা মহিলা বিষয়ক কার্যালয়</option>  
                      <option value="উপজেলা নির্বাহী অফিস">উপজেলা নির্বাহী অফিস</option>  
                      <option value="ইউনিয়ন পরিষদ ">ইউনিয়ন পরিষদ </option>                    
                    </select>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-12 col-sm-6 form-group">
                  <label for="district" class="requred-field">জেলা: </label>
                  <select wire:model="district" id="district" name="district" class="form-control ">
                    <option value="" selected>নির্বাচন করুন...</option>
                    <option value="BAGERHAT">BAGERHAT</option>
                    <option value="BANDARBAN">BANDARBAN</option>
                    <option value="BARGUNA">BARGUNA</option>
                    <option value="BARISHAL">BARISHAL</option>
                    <option value="BHOLA">BHOLA</option>
                    <option value="BOGURA">BOGURA</option>
                    <option value="BRAHMANBARIA">BRAHMANBARIA</option>
                    <option value="CHANDPUR">CHANDPUR</option>
                    <option value="CHATTOGRAM">CHATTOGRAM</option>
                    <option value="CHUADANGA">CHUADANGA</option>
                    <option value="CUMILLA">CUMILLA</option>
                    <option value="DHAKA">DHAKA</option>
                    <option value="DINAJPUR">DINAJPUR</option>
                    <option value="29">FARIDPUR</option>
                    <option value="30">FENI</option>
                    <option value="32">GAIBANDHA</option>
                    <option value="33">GAZIPUR</option>
                    <option value="35">GOPALGANJ</option>
                    <option value="36">HABIGANJ</option>
                    <option value="38">JOYPURHAT</option>
                    <option value="39">JAMALPUR</option>
                    <option value="41">JASHORE</option>
                    <option value="42">JHALAKATHI</option>
                    <option value="44">JHENAIDAH</option>
                    <option value="46">KHAGRACHHARI</option>
                    <option value="47">KHULNA</option>
                    <option value="48">KISHOREGANJ</option>
                    <option value="49">KURIGRAM</option>
                    <option value="50">KUSHTIA</option>
                    <option value="51">LAKSHMIPUR</option>
                    <option value="52">LALMONIRHAT</option>
                    <option value="54">MADARIPUR </option>
                    <option value="55">MAGURA</option>
                    <option value="56">MANIKGANJ</option>
                    <option value="57">MEHERPUR</option>
                    <option value="58">MOULVIBAZAR</option>
                    <option value="59">MUNSHIGANJ</option>
                    <option value="61">MYMENSINGH</option>
                    <option value="64">NAOGAON</option>
                    <option value="65">NARAIL</option>
                    <option value="67">NARAYANGANJ</option>
                    <option value="68">NARSINGDI</option>
                    <option value="69">NATORE</option>
                    <option value="70">CHAPAINAWABGANJ</option>
                    <option value="72">NETROKONA</option>
                    <option value="73">NILPHAMARI</option>
                    <option value="75">NOAKHALI</option>
                    <option value="76">PABNA</option>
                    <option value="77">PANCHAGARH</option>
                    <option value="78">PATUAKHALI</option>
                    <option value="79">PIROJPUR</option>
                    <option value="81">RAJSHAHI</option>
                    <option value="82">RAJBARI</option>
                    <option value="84">RANGAMATI</option>
                    <option value="85">RANGPUR</option>
                    <option value="86">SHARIATPUR</option>
                    <option value="87">SATKHIRA</option>
                    <option value="88">SIRAJGANJ</option>
                    <option value="89">SHERPUR</option>
                    <option value="90">SUNAMGANJ</option>
                    <option value="91">SYLHET</option>
                    <option value="93">TANGAIL</option>
                    <option value="94">THAKURGAON</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 form-group">
                  <label for="upazila" class="requred-field">উপজেলা: </label>
                  <select wire:model="upazila" id="upazila" name="upazila" class="form-control ">
                    <option value="" selected>নির্বাচন করুন...</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Chittagang">Chittagang</option>
                  </select>
                </div>
              </div>
               <div class="form-group row">
                <div class="col">
                  <label for="union" class="requred-field">ইউনিয়ন: </label>
                  <input type="text" name="union" id="union" placeholder="Union" class="form-control " wire:model="union" />
                </div>
                <div class="col-12 col-sm-6">
                  <label for="villageArea" class="requred-field">গ্রাম/মহল্লা: </label>
                  <input type="text" name="villageArea" id="villageArea" placeholder="Village/Area" class="form-control " wire:model="villageArea" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col">
                  <label for="applicationyear" class="requred-field">আবেদনের বছর: </label>
                  <select id="applicationyear" name="applicationyear" class="form-control " wire:model="applicationyear">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="2021">২০২২</option>
                    <option value="2022">২০২৩</option>
                  </select>
                </div>
                <div class="col">
                  <label for="session" class="requred-field">আবেদনের কাল: </label>
                  <select id="session" name="session" class="form-control " wire:model="session">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="January-March">জানুয়ারী- জুন</option>      
                    <option value="January-March">জুলাই- ডিসেম্বর</option>               
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 col-sm-6">
                  <label for="name" class="requred-field">আবেদনকারীর নাম(ইংরেজি): </label>
                  <input type="text" name="english_name" id="name" placeholder="Enter Your Name" class="form-control " wire:model="name" />
                </div>
                <div class="col-12 col-sm-6">
                  <label for="name_bn">আবেদনকারীর নাম(বাংলা): </label>
                  <input type="text" name="name_bn" id="name_bn" placeholder="নাম বাংলা লিখুন" class="form-control " wire:model="name_bn" />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-12 col-sm-6">
                  <label for="nid" class="requred-field">জাতীয় পরিচয়পত্র/ জন্ম নিবন্ধন: </label>
                  <input type="number" id="nid" name="nid" placeholder="National ID or Birth Reg. No" class="form-control " wire:model="nid" />
                </div>
                <div class="col-12 col-sm-6">
                  <label class="requred-field">বয়স: </label>
                  <div class="row">
                    <div class="col">
                      <select name="day" id="day" class="form-control  " wire:model="day">
                        <option selected value="">দিন</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                        <option value=11>11</option>
                        <option value=12>12</option>
                        <option value=13>13</option>
                        <option value=14>14</option>
                        <option value=15>15</option>
                        <option value=16>16</option>
                        <option value=17>17</option>
                        <option value=18>18</option>
                        <option value=19>19</option>
                        <option value=20>20</option>
                        <option value=21>21</option>
                        <option value=22>22</option>
                        <option value=23>23</option>
                        <option value=24>24</option>
                        <option value=25>25</option>
                        <option value=26>26</option>
                        <option value=27>27</option>
                        <option value=28>28</option>
                        <option value=29>29</option>
                        <option value=30>30</option>
                        <option value=31>31</option>
                      </select>
                    </div>
                    <div class="col">
                      <select name="month" id="month" class="form-control  " wire:model="month">
                        <option selected value="">মাস</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                        <option value=11>11</option>
                        <option value=12>12</option>
                      </select>
                    </div>
                    <div class="col">
                      <select name="year" id="year" class="form-control  " wire:model="year">
                        <option selected value="">বছর</option>                     
                        <option value=2004>2004</option>
                        <option value=2003>2003</option>
                        <option value=2002>2002</option>
                        <option value=2001>2001</option>
                        <option value=2000>2000</option>
                        <option value=1999>1999</option>
                        <option value=1998>1998</option>
                        <option value=1997>1997</option>
                        <option value=1996>1996</option>
                        <option value=1995>1995</option>
                        <option value=1994>1994</option>
                        <option value=1993>1993</option>
                        <option value=1992>1992</option>
                        <option value=1991>1991</option>
                        <option value=1990>1990</option>                    
                        <option value=1989>1989</option>
                        <option value=1989>1988</option>
                        <option value=1989>1987</option>
                        <option value=1989>1986</option>
                        <option value=1989>1985</option>
                        <option value=1989>1984</option>
                        <option value=1989>1983</option>
                        <option value=1988>1982</option>
                        <option value=1987>1981</option>
                        <option value=1986>1980</option>
                        <option value=1985>1979</option>       
                        <option value=1996>1978</option>
                        <option value=1995>1977</option>
                        <option value=1994>1976</option>
                        <option value=1993>1975</option>
                        <option value=1992>1974</option>
                        <option value=1991>1973</option>
                        <option value=1990>1972</option>
                        <option value=1989>1971</option>
                        <option value=1988>1970</option>
                        <option value=1987>1969</option>
                        <option value=1986>1968</option>
                        <option value=1985>1967</option>                    
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="religion">ধর্ম: </label>
                  <select id="religion" name="religion" class="form-control " wire:model="religion">
                    <option selected value="">নির্বাচন করুন....</option>
                    <option value="Muslim">মুসলিম</option>
                    <option value="Hindu">হিন্দু</option>
                    <option value="Christian">খ্রিস্টান</option>
                    <option value="Buddhism">বোদ্ধ</option>
                    <option value="Others">অন্যান্য</option>
                  </select>
                </div>
                <div class="col form-group">
                  <label for="education_qualification">শিক্ষাগত যোগ্যতা: </label>
                  <select id="education_qualification" name="education_qualification" class="form-control " wire:model="education_qualification">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="Masters">মাস্টার্স.</option>
                    <option value="Honors">অনার্স</option>
                    <option value="HSC">এইচএসসি</option>
                    <option value="SSC">এসএসসি</option>
                    <option value="JSC">অষ্টম শ্রেণী পাশ</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6 form-group">
                  <label for="mobile" class="requred-field">মোবাইল নং: </label>
                  <input type="number" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control " wire:model="mobile" />
                </div>
                <div class="col-12 col-sm-6 form-group">
                  <label for="email">ইমেইল(যদি থাকে): </label>
                  <input type="email" id="email" name="email" placeholder="Email" class="form-control " wire:model="email" />
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6 form-group">
                  <label for="guardian_name" class="requred-field">পিতা/স্বামীর নাম</label>
                  <input type="text" name="guardian_name" id="guardian_name" placeholder="Father's or Husband Name" class="form-control " wire:model="guardian_name" />
                </div>
                <div class="col-12 col-sm-6 form-group">
                  <label for="mothers_name" class="requred-field">মাতার নাম</label>
                  <input type="text" name="mothers_name" id="mothers_name" placeholder="Mother's Name:" class="form-control " wire:model="mothers_name" />
                </div>
              </div>      
              <div class="form-group row">
                <div class="col-12 col-sm-6">
                  <label for="guardianmobile" class="requred-field">অভিভাবকের মোবাইল নং: </label>
                  <input type="number" id="guardianmobile" name="guardianmobile" placeholder="Guardian Mobile Number" class="form-control " wire:model="guardianmobile" />
                </div>
                <div class="col-12 col-sm-6">
                  <label for="marital_status" class="requred-field">বৈবাহিক অবস্থা:</label>
                  <select id="marital_status" name="marital_status" class="form-control " wire:model="marital_status">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="Married">বিবাহিত</option>
                    <option value="Unmarried">অবিবাহিত</option>
                    <option value="Divorce">ডিভোর্স</option>
                  </select>
                </div>
              </div>
                <div class="form-group row">
                <div class="col">
                  <label for="occupation" class="requred-field">পেশা: </label>
                  <select id="occupation" name="occupation" class="form-control " wire:model="occupation">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="Student">ছাত্রী</option>
                    <option value="Houswife">আধা-সরকারী কর্মচারী</option>                   
                    <option value="Private Job">প্রাইভেট চাকরী</option>
                    <option value="Bussiness">ব্যবসা</option>
                    <option value="NGO Job">এনজিও কর্মী</option>
                    <option value="Social worker">সোশ্যাল ওয়ার্কার</option>
                    <option value="Nurse">নার্স</option>
                    <option value="Others">অন্যান্য</option>
                  </select>
                </div>
                <div class="col">
                  <label for="amount">আবেদনকৃত টাকার পরিমান: </label>
                  <select class="form-control" name="amount" class="form-control " wire:model="amount">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="amount">৫০০০</option> 
                    <option value="amount">১০০০০</option>  
                    <option value="amount">১৫০০০</option>                     
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col">
                  <label for="costamount" class="requred-field">সম্ভাব্য বার্ষিক আয়ের পরিমান:: </label>
                  <select id="costamount" name="costamount" class="form-control " wire:model="costamount">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="১৫০০০">১৫০০০</option>
                    <option value="৩০০০০">৩০০০০</option>
                    <option value="৫০০০০">৫০০০০</option>
                    <option value="১০০০০০">১০০০০০</option>    
                  </select>
                </div>
                <div class="col">
                  <label for="sector">আয়বর্ধক কর্মসূচির নামঃ: </label>
                  <select class="form-control" name="sector" class="form-control " wire:model="sector">
                    <option selected value="">নির্বাচন করুন...</option>
                    <option value="সেলাই কাজ">সেলাই কাজ</option>
                    <option value="খামার">খামার</option>
                    <option value="ক্ষুদ্র শিল্প">ক্ষুদ্র শিল্প</option>  
                    <option value="হস্ত শিল্প">হস্ত শিল্প</option>                    
                    <option value="অন্যান্য কাজ">অন্যান্য কাজ</option>                                      
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="amount">প্রস্তাবিত অর্থের খরচের বিবরণঃ </label>
                <input type="tel" id="amount" name="amount_cost" placeholder="বিবরণ" class="form-control " wire:model="amount" />
              </div>
              <div class="form-group" id="photo-container">
                <label for="photo" class="requred-field">আবেদনকারীর ছবি আপলোড (৩০০ x ৩০০ Pixel, সাইজ 2MB) </label>
                <input type="file" id="photo" name="photo" value="yes" class="" wire:model="photo">
                <!-- <button wire:click.prevent="photoUpload()" class="btn btn-warning">ছবি আপলোড</button> -->
              </div>
              <div class="form-group" id="photo-container">
                <label for="signature" class="requred-field">আবেদনকারীর স্বাক্ষর আপলোড (৩০০ x ৮০ Pixel, সাইজ 2MB) </label>
                <input type="file" id="signature" name="signature" value="yes" class="" wire:model="signature">
                <!-- <button wire:click.prevent="signatureUpload()" class="btn btn-warning">স্বাক্ষর আপলোড</button> -->
              </div>
              <div class="form-check p-3">
                <input type="checkbox" id="confirm" name="confirm" class="">
                <label for="confirm">আমি সজ্ঞানে স্বীকার করছি যে, উপরিউক্ত তথ্যাবলী সঠিক এবং আমি অন্য কোন সরকারী/বেসরকারী প্রতিষ্ঠান হতে ঋণ গ্রহণ করি নাই। আমার কোন তথ্য মিথ্যা প্রমাণিত হলে আমার বিরুদ্ধে আইনুনাগ ব্যবস্থা গ্রহণ করলে আমি তা মেনে নিতে বাধ্য থাকব।</label>
                </label>
              </div>
              <button type="submit" class="btn btn-success">আবেদন জমা</button>
              <button wire:click.prevent="resetInputFields()" class="btn btn-danger">Reset</button>
            </form>
            <br>
          </div>
        </div>
      </div>
    </div>
    </div>
@endsection