<section id="video-content" class="max-w-[1100px] w-full mx-auto mt-[130px]">
    <div class="relative flex gap-5 video-player flex-nowrap">
        <div class="plyr__video-embed w-full overflow-hidden relative rounded-[20px]" id="player">
            <iframe
                src="https://www.youtube.com/embed/{{ $course->path_trailer }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                allowfullscreen allowtransparency allow="autoplay"></iframe>
        </div>
        <div
            class="video-player-sidebar flex flex-col shrink-0 w-[330px] h-[470px] bg-[#F5F8FA] rounded-[20px] p-5 gap-5 pb-0 overflow-y-scroll no-scrollbar">
            <p class="text-lg font-bold text-black">{{ $course->course_videos->count() }}</p>
            <div class="flex flex-col gap-3">
                <div
                    class="group p-[12px_16px] flex items-center gap-[10px] bg-[#E9EFF3] rounded-full hover:bg-[#3525B3] transition-all duration-300">
                    <div class="text-black transition-all duration-300 group-hover:text-white">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.97 2C6.44997 2 1.96997 6.48 1.96997 12C1.96997 17.52 6.44997 22 11.97 22C17.49 22 21.97 17.52 21.97 12C21.97 6.48 17.5 2 11.97 2ZM14.97 14.23L12.07 15.9C11.71 16.11 11.31 16.21 10.92 16.21C10.52 16.21 10.13 16.11 9.76997 15.9C9.04997 15.48 8.61997 14.74 8.61997 13.9V10.55C8.61997 9.72 9.04997 8.97 9.76997 8.55C10.49 8.13 11.35 8.13 12.08 8.55L14.98 10.22C15.7 10.64 16.13 11.38 16.13 12.22C16.13 13.06 15.7 13.81 14.97 14.23Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <a href="{{ route('front.details', $course) }}" class="">
                        <p class="font-semibold transition-all duration-300 group-hover:text-white">Course Trailer
                        </p>
                    </a>

                </div>
                @forelse($course->course_videos as $video)
                    <div
                        class="group p-[12px_16px] flex items-center gap-[10px] bg-[#3525B3]  rounded-full hover:bg-[#3525B3] transition-all duration-300">
                        <div class="text-white transition-all duration-300 group-hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.97 2C6.44997 2 1.96997 6.48 1.96997 12C1.96997 17.52 6.44997 22 11.97 22C17.49 22 21.97 17.52 21.97 12C21.97 6.48 17.5 2 11.97 2ZM14.97 14.23L12.07 15.9C11.71 16.11 11.31 16.21 10.92 16.21C10.52 16.21 10.13 16.11 9.76997 15.9C9.04997 15.48 8.61997 14.74 8.61997 13.9V10.55C8.61997 9.72 9.04997 8.97 9.76997 8.55C10.49 8.13 11.35 8.13 12.08 8.55L14.98 10.22C15.7 10.64 16.13 11.38 16.13 12.22C16.13 13.06 15.7 13.81 14.97 14.23Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <a href="{{ route('front.learning', [$course, 'courseVideoId' => $video->id]) }}"
                            class="">
                            <p class="font-semibold text-white transition-all duration-300 group-hover:text-white">
                                {{ $video->name }}</p>
                        </a>

                    </div>
                @empty
                    <p class="">Belum ada Video</p>
                @endforelse

            </div>
        </div>
    </div>
</section>