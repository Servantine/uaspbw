@extends('layouts.main')
@section('konten')
<table class="table">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Judul Artikel</th>
         <th scope="col">Tanggal Artikel</th>
         <th scope="col">Deskripsi Artikel</th>
       </tr>
     </thead>
     <tbody>
         @foreach ($hasil as $key => $item)
         <tr>
             <th scope="row">{{$hasil->firstItem() + $key}}</th>
             <td>{{$item -> judul_artikel}}</td>
             <td>{{$item -> tanggal_artikel}}</td>
             <td>{{$item -> deskripsi_artikel}}</td>
           </tr>
         @endforeach
     </tbody>
   </table>
 @endsection