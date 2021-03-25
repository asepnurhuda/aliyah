@extends('edubin.layout.master')
@section('content')

@include('edubin.partials._banner')

<!--====== TEACHERS PART START ======-->

<section id="teachers-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            @foreach($allteachers as $teacher)
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ $teacher->thumbnail }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{ route('single-teacher', $teacher->id) }}"><h6>{{ $teacher->nama }}</h6></a>
                        <span>{{ $teacher->course->nama }}</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            @endforeach
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                        <li>{{ $allteachers->links() }}</li>
                    </ul>
                </nav>  <!-- courses pagination -->
            </div>
        </div>  <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->

@stop