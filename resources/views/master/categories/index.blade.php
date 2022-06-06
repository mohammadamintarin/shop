@extends('layouts.master')

@section('title')
    دسته‌بندی‌ها
@endsection
@section('content')
    <section class="articles">
        <div class="container">
            <div class="page-statistics">
                <div class="row">
                    <div class="content">
                        <p class="pull-right"><b><i class="ti ti-direction-alt"></i>
                                تاکنون
                                    {{$count}}
                                دسته‌بندی‌ در سایت ثبت شده است.
                            </b></p>
                        <a href="{{route('category.create')}}" class="pull-left btn btn-success btn-lg"> افزودن دسته‌بندی‌  جدید</a>
                    </div>
                </div>
            </div>
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>دسته‌بندی‌ها</h4>
                    <h6><i class="ti ti-layers"></i></h6>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان</th>
                                <th>دسته‌پدر</th>
                                <th>بیشتر</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($count = 0)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{++$count}}</td>
                                    <td>{{$category->title}}</td>
                                    @if(!$category->parent)
                                        <td>ندارد</td>
                                    @else
                                        <td>{{optional($category->parent)->title}}</td>
                                    @endif
                                        </td>
                                        <td class="td-actions">
                                            <a href="#"><i class="ti ti-trash delete"></i></a>
                                            <a href="#"><i class="ti ti-ink-pen edit"></i></a>
                                            <a href="#"><i class="ti ti-target view"></i></a>
                                        </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="paginat">
                    <div class="float-right">
                        <input type="text" placeholder="جستجو" class="form-control">
                    </div>
                    <div class="float-left">
                        <ul>
                            <li><a href=""><i class="ti-angle-right"></i></a></li>
                            <li><a href="" class="active">۱</a></li>
                            <li><a href="">۲</a></li>
                            <li><a href="">۳</a></li>
                            <li><a href="">۴</a></li>
                            <li><a href="">۵</a></li>
                            <li><a href="">۰۰۰</a></li>
                            <li><a href="">۲۰</a></li>
                            <li><a href=""><i class="ti-angle-left"></i></a></li>
                        </ul>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </section>
@endsection
