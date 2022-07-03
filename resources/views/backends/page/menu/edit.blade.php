@extends('backends.layout.master')
@section('style')
    <style>
        body{
            overflow-x: hidden;
        }
        .Post_row{
            width: 90%;
            margin: auto;
            padding-top: 40px;
            /* padding: 40px 0; */
            position: relative;
        }
        #form-menu{
            height:auto;
            width: 100%;
            background-color: white;
            /* display: none */
            left: 0;
            position: relative;
            top: 32%;
            display: flex;
            justify-content: center;
            border-radius: 20px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

        }
        #making-wrap{
            height: 80px;
            width: 80px;
            border-radius: 50%;
            position: absolute;
            background-color: #0093E9;
            overflow: hidden;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
            /* transform: translateX(50%) */
            top: -40px;
            display: grid;
            place-items: center;
        }
        .edit_top{
            font-size: 29px;
            transition: 0.2s;
            color: white;
            position: absolute;
        }
        .Post_Form{
            width: 90%;
            margin: 20px 0;
        }
        .Mybtn{
            height: 50px;
            width: 180px;
            background-color: #0093E9;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
            color: white;
            border: none;
            border-radius: 40px;
        }
        .InputFile{
            height: 40px;
            width: 130px;
            /* border-radius: 40px; */
            background-color: #0093E9;
            display: grid;
            place-items: center;
            position: relative;
            overflow: hidden;
        }
        .InputFile i{
            color: white;
            font-size: 18px;
        }
        .Myfile{
            position: absolute;
            height: 200%;
            width: 100%;
            opacity: 0;
        }
        .edit_bottom{
            font-size: 29px;
            color: white;
            position: absolute;
            transform: translateY(48px);
            transition: 0.2s;
        }
        .success_cover{
            position: absolute;
            right: 0;
            top: 65%;
            transform: translateX(295px);
            transition: 0.1s;
        }
        .Success_Message{
            height: 90px;
            width: 295px;
            background-color: white;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            justify-content: center;
        }
        .animatedLine{
            height: 3px;
            width: 0%;
            background-color: #0093E9;
            display: inline-block;
            position: absolute;
            bottom: 0;
            right: 0;
            transition: 0.9s;
        }
    </style>
@endsection
@section('content')
    <div class="Post_row">
        <div id="form-menu">
            <div id="making-wrap">
                <i class="fa-solid fa-file-import edit_top"></i>
                <i class="fa-solid fa-check edit_bottom"></i>
            </div>
            <form action="{{ route('menu.update',$menu->id) }}" class="Post_Form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="{{ $menu->title }}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" name="slug" value="{{ $menu->slug }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter The Slug">
                </div>
                  <button class="Mybtn" type="submit">
                      Submit
                  </button>
            </form>
        </div>
    </div>
    {{-- <div class="success_cover">
        <div class="Success_Message">
            <i class="fa-solid fa-check" style="color: green; font-size:34px;"></i>
            <span class="Message_text">Submit Successfully!</span>
            <span class="animatedLine"></span>
        </div>
    </div> --}}
    @section('js')
        <script src="{{ asset('backend/logic/logic.js') }}"></script>
    @endsection
@endsection
