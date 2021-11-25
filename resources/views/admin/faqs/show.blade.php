@extends('layouts.admin')
@section('title', $category->name)
@section('content')
    <section class="p-5">
        <h5>All Frequently asked questions</h5>
        <h6 class="fs-bold">Category: <span>{{$category->name}}</span></h6>
        <hr>
        <div class="row">
            <div class="col-12">
                @include('includes.status')
                @foreach($category->faqs as $faq)
                    <div class="accordion accordion-flush mt-1" id="accordion{{$faq->id}}">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{$faq->id}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{$faq->id}}" aria-expanded="false"
                                        aria-controls="flush-collapse{{$faq->id}}">
                                    {{$faq->quiz}}


                                </button>
                            </h2>
                            <div id="flush-collapse{{$faq->id}}" class="accordion-collapse collapse"
                                 aria-labelledby="flush-heading{{$faq->id}}" data-bs-parent="#accordion{{$faq->id}}">
                                <div class="accordion-body">
                                    <p>
                                        {!! $faq->answer !!}
                                    </p>
                                    <div class=" d-inline-flex">

                                        <a href="{{route('faqs.edit', $faq->id)}}" title="Edit" class="btn
                                            btn-primary hire
                                            m-1">Edit<i
                                                class="fas fa-external-link-alt ms-2"></i></a>
                                        <form method="POST" action="{{route('faqs.destroy', $faq->id)}}" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-primary hire m-1" title=" delete"
                                            >Delete <i class="far fa-trash-alt"></i></button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
