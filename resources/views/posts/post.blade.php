 <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          <div class="blog-post">
           <a href="/posts/{{$post->id}}"> <h2 class="blog-post-title">{{ $post->title }}</h2></a>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} <a href="#">Mark</a></p>
              {{ $post->body }}
          </div><!-- /.blog-post -->
