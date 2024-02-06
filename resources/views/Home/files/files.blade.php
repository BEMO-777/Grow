<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
    <link rel="stylesheet" href="{{asset('home/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/dash.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="{{asset('Home/JavaScript/yoyo.js')}}"></script>
  </head>
  <body>
    <div class="page d-flex">
      <!-- start sidebar  -->
      @include('Home.userpage.sidebar')
      <!-- start content  -->
      <div class="content w-full hide-flow">
        <!-- start head  -->
        @include('Home.userpage.content')
        <!-- start courses  -->
        <h1 class="p-relative">Files</h1>
        <div class="files-page d-flex m-20 g-20">
          <div class="files-stats bg-white p-20 rad-10">
            <h2 class="mt-0 mb-15 txt-c-mobile">Files Statistics</h2>

            {{-- Files_Statistics --}}
            @include('Home.files.Files_Statistics')
            {{-- End Files_Statistics --}}


          <div class="files-content d-grid g-20">
            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/txt.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-file.txt</div>
              <p class="c-gray fs-13">Tiger</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>20/6/2020</span>
                <span>5.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/pdf.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.pdf</div>
              <p class="c-gray fs-13">Admin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/png.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.png</div>
              <p class="c-gray fs-13">ssd</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/eps.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.eps</div>
              <p class="c-gray fs-13">sss</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/zip.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.zip</div>
              <p class="c-gray fs-13">zzz</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/sql.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.sql</div>
              <p class="c-gray fs-13">rrr</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/txt.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.txt</div>
              <p class="c-gray fs-13">Adtxtmin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/psd.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.psd</div>
              <p class="c-gray fs-13">Admin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/png.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.png</div>
              <p class="c-gray fs-13">png slayer</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>4/3/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/eps.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.eps</div>
              <p class="c-gray fs-13">epso</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/zip.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.zip</div>
              <p class="c-gray fs-13">sse</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/psd.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.psd</div>
              <p class="c-gray fs-13">ra</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/eps.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.eps</div>
              <p class="c-gray fs-13">RR</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/txt.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.txt</div>
              <p class="c-gray fs-13">Admin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/avi.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.svg</div>
              <p class="c-gray fs-13">Admin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/avi.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.pdf</div>
              <p class="c-gray fs-13">Admin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/sql.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.svg</div>
              <p class="c-gray fs-13">Admin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>8/9/2021</span>
                <span>4.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/avi.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-ss.avi</div>
              <p class="c-gray fs-13">AAA</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>10/2/2021</span>
                <span>2.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/dll.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-avi.dll</div>
              <p class="c-gray fs-13">Admin</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>1/3/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/png.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-jj.png</div>
              <p class="c-gray fs-13">T</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/7/2021</span>
                <span>8.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/zip.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-files.zip</div>
              <p class="c-gray fs-13">Tiger</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>4/4/2021</span>
                <span>4.4GB</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/txt.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-txt.txt</div>
              <p class="c-gray fs-13">lee</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>4/7/2021</span>
                <span>2.5MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/psd.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-my.psd</div>
              <p class="c-gray fs-13">Guts</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/11/2022</span>
                <span>8.0MG</span>
              </div>
            </div>

            <div class="file bg-white rad-10 p-10 ">
              <i class="fa-solid fa-download c-gray p-absolute"></i>
              <div class="icon txt-c">
                <img class="mt-15 mb-15" src="{{asset('imgs/pdf.svg')}}" alt="">
              </div>
              <div class="txt-c mb-10 fs-14">my-pdf.pdf</div>
              <p class="c-gray fs-13">Tiger</p>
              <div class="info fs-13 c-gray between-flex mt-10 pt-10">
                <span>11/12/2021</span>
                <span>1.5MG</span>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>