@extends('layouts.master')

@section('title')
    افزودن دسته‌بندی‌
@endsection
@section('content')


    <section class="add-articles">
        <div class="container">
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>افزودن دسته بندی</h4>
                    <h6><i class="ti ti-layers"></i></h6>
                </div>
                <div class="widget-body">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>عنوان فارسی</label>
                                <span class="text-danger f-8">(الزامی)</span>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group col-md-4">
                                <label>عنوان انگلیسی</label>
                                <span class="text-danger f-8">(الزامی)</span>
                                <input type="text" class="form-control" name="title_en">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">دسته پدر</label>
                                <span class="text-primary f-8">در صورت وجود دسته پدر آن را انتخاب کنید.</span>
                                <select class="form-control" name="parent_id">
                                    <option selected value disabled>ندارد</option>
                                    @foreach($items as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">توضیحات </label>
                                <span class="text-danger f-8">(الزامی)</span>
                                <textarea class="form-control" name="description" rows="8" cols="80"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>عنوان سئو</label>
                                <span class="text-danger f-8">(الزامی)</span>
                                <input type="text" class="form-control" name="title_seo">
                            </div>
                            <div class="form-group col-md-4">
                                <label>توضیحات سئو</label>
                                <span class="text-danger f-8">(الزامی)</span>
                                <input type="text" class="form-control" name="description_seo">
                            </div>
                            <div class="form-group col-md-4">
                                <label>کلمات سئو</label>
                                <span class="text-danger f-8">(الزامی)</span>
                                <input type="text" class="form-control" name="keywords_seo">
                            </div>
                        </div>
                        <br>
                        <div class="clearfix"></div>
                        <div class="form-group pull-right">
                            <div class="upload-btn-wrapper">
                                <button class="bttn btn-warning btn-lg">آپلود تصویر</button>
                                <input type="file" name="image" />
                            </div>
                        </div>
                        <div class="form-group pull-left">
                            <button type="submit" class="btn btn-success btn-lg">ارسال</button>
                        </div>

                    </form>
                </div>

                <br><br>
            </div>
        </div>
    </section>


@endsection
