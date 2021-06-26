<section>
    <div class="blog-single">
        <img src="{{ $news->image }}" class="" alt="img">

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="single-log-content">
                    <h3>{{ $news->title }}</h3>
                    <div class="mt-4 bg-gray">
                        <span>Posted By:<a href="#" class="ml-2">{{ $news->author }}</a> At
                            {{$news->created_at->format('M d, Y')}} | <a href="#" class="mr-2">
                                {{ count($comments) }} Comments </a> </span>
                    </div>
                    <div class="bg-gray mt-4">
                        <p>{{ $news->short_description }}</p>
                    </div>
                    <div class="bg-gray mt-4">
                        {!! $news->detail_description !!}
                    </div>
                </div>
                <div class="single-log-content mt-5">
                    <div class="share-article">
                        <h6 class="text-center">Share This Article</h6>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-facebook mr-2"><i
                                    class="fab fa-facebook-f mr-3"></i>Facebook</button>
                            <button class="btn btn-twitter mr-2"><i class="fab fa-twitter mr-3"></i>Twitter</button>
                            <button class="btn btn-google"><i class="fab fa-google-plus-g"></i>Google+</button>


                        </div>
                    </div>
                    <div class="media media-back mt-5">
                        {{-- <div class="artile-by">
                            <a href="{{URL::to('author-profile')}}/{{$author->id}}">
                        <img src="{{URL:: to('storage/app')}}/{{$author->image}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="mb-0 text-color">
                            <strong>{{$author->name}}</strong>
                        </p>
                        <p class="p-color">{{$author->description}}</p>
                    </div> --}}
                </div>
                <div class="mt-5" id="replyForm">
                    <h6 class="writeCR">WRITE COMMENT</h6>
                    <form wire:submit.prevent="addComment({{ $news->id }})" method="post">
                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="form-group input-color">
                                    <input type="text" wire:model="name" class="form-control" placeholder="Full Name">
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="form-group input-color">
                                    <input type="text" wire:model="email" class="form-control" placeholder="Email">
                                </div>

                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="form-group input-color">
                                    <textarea wire:model="message" class="messagePlaceholder"
                                        placeholder="Comment Message" id="" cols="100" rows="5"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="replyId" class="rreply">
                            <input type="hidden" name="newsId" value="{{ $news->id }}">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-cmt">Save</button>
                            </div>
                    </form>
                </div>

                <div class="mt-5">
                    @foreach ($comments as $comment)
                    <div class="media mt-5">
                        <div class="artile-by">
                            <img src="https://ui-avatars.com/api/?background=303030&color=f1f1f1&name={{ $comment->name  }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="media-body">
                            <div class="d-flex">
                                <p class="mb-0 text-color mr-4">
                                    <strong>{{ $comment->name }}</strong>
                                </p>
                                <span class="p-color">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                    ago</span>
                            </div>
                            <p class="p-color">{{ $comment->message }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
