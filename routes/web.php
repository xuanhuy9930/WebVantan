<?php

Route::get('/', function () {
    return view('page.trangchu');
});
Route::get('trangchu', function () {
    return view('page.trangchu');
});
Route::get('baogia', function () {
    return view('page.baogia');
});
Route::get('chitiet', function () {
    return view('page.chitiet');
});
Route::get('chitietdichvu', function () {
    return view('page.chitietdichvu');
});
Route::get('chitietsanpham', function () {
    return view('page.chitietsanpham');
});
Route::get('dichvu', function () {
    return view('page.dichvu');
});
Route::get('gioithieu', function () {
    return view('page.gioithieu');
});
Route::get('hinhanh', function () {
    return view('page.hinhanhcty');
});
Route::get('huongdan', function () {
    return view('page.huongdan');
});
Route::get('lienhe', function () {
    return view('page.lienhe');
});
Route::get('lienket', function () {
    return view('page.lienketxuongsx');
});
Route::get('sanpham', function () {
    return view('page.sanpham');
});
Route::get('duan', function () {
    return view('page.tinduanthuchien');
});