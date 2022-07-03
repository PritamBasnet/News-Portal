@extends('backends.layout.master')
@section('style')
    <style>
        .table_row {
            width: 90%;
            height: fit-content;
            margin: auto;
            background: white;
            padding: 10px;
            border-radius: 10px;
            position: relative;
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .Mydelete {
            height: 60px;
            width: 160px;
            border-radius: 4px;
            background-color: #F32424;
            border: none;
            display: grid;
            place-items: center;
        }

        .DeleteIcon {
            height: 32px;
            width: 28px;
            display: inline-block;
            background-color: white;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            position: relative;
            cursor: pointer;
        }

        .Top_banner {
            height: 3px;
            width: 28px;
            display: inline-block;
            background-color: white;
            position: absolute;
            top: -5px;
            left: 0;
        }

        .Top_banner::before {
            height: 4px;
            width: 4px;
            content: "";
            display: block;
            margin: auto;
            background: white;
            margin-bottom: 5px;
            position: relative;
            top: -4px;
        }

        .DeleteIcon:hover .DeleteIcon {
            transform: rotateX(-60deg);
        }

        #making-wrap {
            height: 80px;
            width: 80px;
            border-radius: 50%;
            position: absolute;
            overflow: hidden;
            background-color: #74EBD5;
            background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);
            /* transform: translateX(50%) */
            top: -40px;
            display: grid;
            place-items: center;
        }

        .edit_top {
            font-size: 29px;
            transition: 0.2s;
            color: white;
            position: absolute;
        }

        a {
            text-decoration: none;
            /* color: white !important; */
        }

        a i {
            color: white !important;
        }

    </style>
@endsection
@section('content')
    <div class="table_row">
        <div id="making-wrap">
            <i class="fa-solid fa-table edit_top"></i>
        </div>
        <table class="table table-striped" style="margin-top: 35px;">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @isset($menu)
                    @foreach ($menu as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>
                            <button class="btn btn-danger">
                                <a href="{{ route('menu.delete',$data->id) }}">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-info">
                                <a href="{{ route('menu.edit',$data->id) }}">
                                    <i class="fa-solid fa-file-pen"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection
