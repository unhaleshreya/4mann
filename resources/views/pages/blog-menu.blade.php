   <div class="project-sidebar">
        <!-- Project detail Box Start -->
        <div class="project-detail-box">
            <!-- Project Detail Title Start -->
            <div class="project-detail-title">
                <h3>Latest News</h3>
            </div>
            <!-- Project Detail Title End -->

            <div class="project-detail-list">
                @if($mediaBlogs->count() > 0)
                @foreach($mediaBlogs as $blog)
                <!-- Project Detail Item Start -->
                <div class="project-detail-item">
                    <div class="post-img">
                       <a href="{{ route('blog.details', $blog->slug) }}"><img src="{{ asset('storage/' . $blog->image) }}" alt=""></a>
                    </div>
                    <div class="project-detail-content">
                         <a href="{{ route('blog.details', $blog->slug) }}"><h3>{{ $blog->title }}</h3></a>
                        <p>{{ $blog->created_at->format('d M, Y') }}</p>
                    </div>
                </div>
                        <!-- Project Detail Item End -->
                @endforeach
                @else
                <div class="project-detail-item">
                    <div class="project-detail-content">
                        <h3>No blogs found</h3>
                    </div>
                </div>
                @endif

                <!-- Project Detail Item Start -->
            


            </div>
        </div>
        <!-- Project detail Box End -->


    </div>
