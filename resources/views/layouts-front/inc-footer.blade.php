<footer>

<style>
.text-gray{

color: #ccc;
  }
</style>
    <div class="footer-menu">
    <div class="container" >
        <div class="row">

            <div class="col-md-4">
                <h4>Little Reveurs<span class="head-line"></span></h4>
                <p>
                  31/99 โพธิ์ทองแมนชั่น
ซอยพหลโยธิน34 แขวงเสนานิคม
เขตจตุจักร กรุงเทพฯ 10900</p>

               <ul>
                <li><span>Tel:</span>  <span style="color:#fdf7ac">080-111-3193</span> </li>
                <li><span>Email:</span>  <span style="color:#fdf7ac">littlereveurs@gmail.com</span></li>
                <li><span>Website:</span>  <span style="color:#fdf7ac">www.littlereveurs.com</span> </li>
                <li><span>Line Id:</span> <a href="http://line.me/ti/p/@littshop" target="_blank" style="color:#fdf7ac">@littshop </a></li>
               </ul>

            </div>

            <div class="col-md-2">
                <h4>Little Reveurs<span class="head-line"></span></h4>
                <ul>
                  <li><a href="{{url('about')}}" ><span class="text-gray">เกี่ยวกับเรา</span>   </a></li>

                  @if (Auth::guest())
                  <li><a href="{{url('login')}}" ><span class="text-gray">Login</span>   </a></li>
                  <li><a href="{{url('register')}}" ><span class="text-gray">Register</span> </a>  </li>
                  @else
                  @endif


                </ul>
            </div>

            <div class="col-md-2">
                <h4>ศูนย์ดูแลลูกค้า<span class="head-line"></span></h4>
                <ul>

                 <li><a href="{{url('/')}}"><span>การชำระเงิน</span></a>   </li>
                 <li><a href="{{url('terms_condition')}}"><span>การสั่งซื้อสินค้า</span></a> </li>
                  <li><a href="{{url('terms_condition')}}"><span>การส่งสินค้า</span></a> </li>
                  <li><a href="{{url('terms_condition')}}"><span>การคืนสินค้า</span></a> </li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>Little Reveurs<span class="head-line"></span></h4>
                <p>ตุ๊กตาของร้านเราทำจากผ้าคุณภาพดี และใยสังเคราะห์เเกรด A.</p>

            <ul class="social-icons">
                <li>
                    <a class="facebook" href="https://www.facebook.com/littlereveurs/"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a class="google" href="#"><i class="fa fa-youtube"></i></a>
                </li>
            </ul>

            </div>

            <div class="col-lg-12" style="border-top: 1px solid rgba(255,255,255,.06); margin-top:30px;">

                <p class="copyright small" style="padding: 15px 0;">Copyright © littlereveurs. 2018. All Rights Reserved</p>
            </div>
        </div>
    </div>
    </div>


</footer>
