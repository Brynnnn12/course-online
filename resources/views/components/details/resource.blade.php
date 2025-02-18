<section id="Video-Resources" class="flex flex-col mt-5">
    <div class="max-w-[1100px] w-full mx-auto flex flex-col gap-3">
        <h1 class="title font-extrabold text-[30px] leading-[45px]">{{ $course->name }}</h1>
        <div class="flex items-center gap-5">
            <div class="flex items-center gap-[6px]">
                <div>
                    <img src="{{ asset('assets/icon/crown.svg') }}" alt="icon">
                </div>
                <p class="font-semibold">{{ $course->category->name }}</p>
            </div>
            <div class="flex items-center gap-[6px]">
                <div>
                    <img src="{{ asset('assets/icon/award-outline.svg') }}" alt="icon">
                </div>
                <p class="font-semibold">Certificate</p>
            </div>
            <div class="flex items-center gap-[6px]">
                <div>
                    <img src="{{ asset('assets/icon/profile-2user.svg') }}" alt="icon">
                </div>
                <p class="font-semibold">{{ $course->students->count() }} students</p>
            </div>
            <div class="flex items-center gap-[6px]">
                <div>
                    <img src="{{ asset('assets/icon/brifecase-tick.svg') }}" alt="icon">
                </div>
                <p class="font-semibold">Job-Guarantee</p>
            </div>
        </div>
    </div>
    <div
        class="max-w-[1100px] w-full mx-auto mt-10 tablink-container flex gap-3 px-4 sm:p-0 no-scrollbar overflow-x-scroll">
        <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129]"
            onclick="openPage('About', this)" id="defaultOpen">About</div>
        <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129]"
            onclick="openPage('Resources', this)">Resources</div>
        <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129]"
            onclick="openPage('Reviews', this)">Reviews</div>
        <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129]"
            onclick="openPage('Discussions', this)">Discussions</div>
        <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129]"
            onclick="openPage('Rewards', this)">Rewards</div>
    </div>
    <div class="bg-[#F5F8FA] py-[50px]">
        <div class="max-w-[1100px] w-full mx-auto flex flex-col gap-[70px]">
            <div class="flex gap-[50px]">
                <div class="tabs-container w-[700px] flex shrink-0">
                    <div id="About" class="hidden tabcontent">
                        <div class="flex flex-col gap-5 w-[700px] shrink-0">
                            <h3 class="text-2xl font-bold">Grow Your Career</h3>
                            <p class="font-medium leading-[30px]">
                                {{ $course->about }}
                            </p>

                            <div class="grid grid-cols-2 gap-x-[30px] gap-y-5">
                                @forelse($course->course_keypoints as $keypoint)
                                    <div class="flex items-center gap-3 benefit-card">
                                        <div class="flex w-6 h-6 shrink-0">
                                            <img src="{{ asset('assets/icon/tick-circle.svg') }}" alt="icon">
                                        </div>
                                        <p class="font-medium leading-[30px]">{{ $keypoint->name }}</p>
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <div id="Resources" class="hidden tabcontent">
                        <div class="flex flex-col gap-5 w-[700px] shrink-0">
                            <h3 class="text-2xl font-bold">Resources</h3>
                            <p class="font-medium leading-[30px]">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eos et accusantium
                                quia exercitationem reiciendis? Doloribus, voluptate natus voluptas deserunt aliquam
                                nesciunt blanditiis ipsum porro hic! Iusto maxime ullam soluta.
                            </p>
                        </div>
                    </div>
                    <div id="Reviews" class="hidden tabcontent">
                        <div class="flex flex-col gap-5 w-[700px] shrink-0">
                            <h3 class="text-2xl font-bold">Reviews</h3>
                            <p class="font-medium leading-[30px]">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eos et accusantium
                                quia exercitationem reiciendis? Doloribus, voluptate natus voluptas deserunt aliquam
                                nesciunt blanditiis ipsum porro hic! Iusto maxime ullam soluta.
                            </p>
                        </div>
                    </div>
                    <div id="Discussions" class="hidden tabcontent">
                        <div class="flex flex-col gap-5 w-[700px] shrink-0">
                            <h3 class="text-2xl font-bold">Discussions</h3>
                            <p class="font-medium leading-[30px]">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eos et accusantium
                                quia exercitationem reiciendis? Doloribus, voluptate natus voluptas deserunt aliquam
                                nesciunt blanditiis ipsum porro hic! Iusto maxime ullam soluta.
                            </p>
                        </div>
                    </div>
                    <div id="Rewards" class="hidden tabcontent">
                        <div class="flex flex-col gap-5 w-[700px] shrink-0">
                            <h3 class="text-2xl font-bold">Rewards</h3>
                            <p class="font-medium leading-[30px]">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eos et accusantium
                                quia exercitationem reiciendis? Doloribus, voluptate natus voluptas deserunt aliquam
                                nesciunt blanditiis ipsum porro hic! Iusto maxime ullam soluta.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mentor-sidebar flex flex-col gap-[30px] w-full">
                    <div class="flex flex-col gap-4 p-5 bg-white mentor-info rounded-2xl">
                        <p class="w-full text-lg font-bold text-left">Teacher</p>
                        <div class="flex items-center justify-between w-full">
                            <div class="flex items-center gap-3">
                                <a href=""
                                    class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                    <img src="{{ Storage::url($course->teacher->user->avatar) }}"
                                        class="object-cover w-full h-full" alt="photo">
                                </a>
                                <div class="flex flex-col gap-[2px]">
                                    <a href=""
                                        class="font-semibold">{{ $course->teacher->user->name }}</a>
                                    <p class="text-sm text-[#6D7786]">{{ $course->teacher->user->occupation }}</p>
                                </div>
                            </div>
                            <a href=""
                                class="p-[4px_12px] rounded-full bg-[#FF6129] font-semibold text-xs text-white text-center">Follow</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 p-5 bg-white rounded-2xl">
                        <p class="w-full text-lg font-bold text-left">Unlock Badges</p>

                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('assets/icon/Group 7.svg') }}"
                                    class="object-cover w-full h-full" alt="icon">
                            </div>
                            <div class="flex flex-col gap-[2px]">
                                <div class="font-semibold">Spirit of Learning</div>
                                <p class="text-sm text-[#6D7786]">18,393 earned</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('assets/icon/Group 7-1.svg') }}"
                                    class="object-cover w-full h-full" alt="icon">
                            </div>
                            <div class="flex flex-col gap-[2px]">
                                <div class="font-semibold">Everyday New</div>
                                <p class="text-sm text-[#6D7786]">6,392 earned</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ asset('assets/icon/Group 7-2.svg') }}"
                                    class="object-cover w-full h-full" alt="icon">
                            </div>
                            <div class="flex flex-col gap-[2px]">
                                <div class="font-semibold">Quick Learner Pro</div>
                                <p class="text-sm text-[#6D7786]">44 earned</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="Screenshots" class="flex flex-col gap-3">
                <h3 class="title-section font-bold text-xl leading-[30px] ">Students Portfolio</h3>
                <div class="grid grid-cols-4 gap-5">
                    <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                        data-src="{{ asset('assets/thumbnail/image.png') }}" data-fancybox="gallery"
                        data-caption="Caption #1">
                        <img src="{{ asset('assets/thumbnail/image.png') }}" class="object-cover w-full h-full"
                            alt="image">
                    </div>
                    <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                        data-src="{{ asset('assets/thumbnail/image-1.png') }}" data-fancybox="gallery"
                        data-caption="Caption #1">
                        <img src="{{ asset('assets/thumbnail/image-1.png') }}" class="object-cover w-full h-full"
                            alt="image">
                    </div>
                    <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                        data-src="{{ asset('assets/thumbnail/image-2.png') }}" data-fancybox="gallery"
                        data-caption="Caption #1">
                        <img src="{{ asset('assets/thumbnail/image-2.png') }}" class="object-cover w-full h-full"
                            alt="image">
                    </div>
                    <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                        data-src="{{ asset('assets/thumbnail/image-3.png') }}" data-fancybox="gallery"
                        data-caption="Caption #1">
                        <img src="{{ asset('assets/thumbnail/image-3.png') }}" class="object-cover w-full h-full"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>