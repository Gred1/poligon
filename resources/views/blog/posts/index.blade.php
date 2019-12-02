@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <table>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->published_at}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
