<section id="Popular-Courses" class="max-w-[1200px] mx-auto flex flex-col p-[70px_82px_0px] gap-[30px] bg-[#F5F8FA] rounded-[32px]">
    <div class="flex flex-col gap-[30px] items-center text-center">
        <div class="gradient-badge w-fit p-[8px_16px] rounded-full border border-[#FED6AD] flex items-center gap-[6px]">
            <div>
                <img src="assets/icon/medal-star.svg" alt="icon">
            </div>
            <p class="font-medium text-sm text-[#FF6129]">Popular Courses</p>
        </div>
        <div class="flex flex-col">
            <h2 class="font-bold text-[40px] leading-[60px]">Don’t Missed It, Learn Now</h2>
            <p class="text-[#6D7786] text-lg -tracking-[2%]">Catching up the on demand skills and high paying career this year</p>
        </div>
    </div>
    <div class="relative">
        <button class="btn-prev absolute rotate-180 -left-[52px] top-[216px]">
            <img src="assets/icon/arrow-right.svg" alt="icon">
        </button>
        <button class="btn-prev absolute -right-[52px] top-[216px]">
            <img src="assets/icon/arrow-right.svg" alt="icon">
        </button>
        <div id="course-slider" class="w-full">
            @forelse($courses as $course)
            <div class="course-card w-1/3 px-3 pb-[70px] mt-[2px]">
                <div class="flex flex-col rounded-t-[12px] rounded-b-[24px] gap-[32px] bg-white w-full pb-[10px] overflow-hidden transition-all duration-300 hover:ring-2 hover:ring-[#FF6129]">
                    <a href="{{route('front.details', $course->slug)}}" class="thumbnail w-full h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                        <img src="{{Storage::url($course->thumbnail)}}" class="object-cover w-full h-full" alt="thumbnail">
                    </a>
                    <div class="flex flex-col px-4 gap-[10px]">
                        <a href="{{route('front.details', $course->slug)}}" class="font-semibold text-lg line-clamp-2 hover:line-clamp-none min-h-[56px]">{{$course->name}}</a>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-[2px]">
                                <div>
                                    <img src="assets/icon/star.svg" alt="star">
                                </div>
                                <div>
                                    <img src="assets/icon/star.svg" alt="star">
                                </div>
                                <div>
                                    <img src="assets/icon/star.svg" alt="star">
                                </div>
                                <div>
                                    <img src="assets/icon/star.svg" alt="star">
                                </div>
                                <div>
                                    <img src="assets/icon/star.svg" alt="star">
                                </div>
                            </div>
                            <p class="text-right text-[#6D7786]">{{$course->students->count()}}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="flex w-8 h-8 overflow-hidden rounded-full shrink-0">
                                <img src="{{Storage::url($course->teacher->user->avatar)}}" class="object-cover w-full h-full" alt="icon">
                            </div>
                            <div class="flex flex-col">
                                <p class="font-semibold">{{$course->teacher->user->name}}</p>
                                <p class="text-[#6D7786]">{{$course->teacher->user->occupation}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="">Belum Ada Kelas yang ditambahkan</p>
            @endforelse
            
        </div>
    </div>
</section>