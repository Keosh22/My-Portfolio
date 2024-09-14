    <div class="flex flex-col gap-5 items-start">
        <h1 class="font-poppins text-4xl font-bold leading-normal">Certificates</h1>
        <h3 class="font-poppins text-2xl font-bold leading-normal">Recognizing My <span
                class="text-cambridge-950">Expertise</span></h3>
        <p class="font-lora text-lg text-khaki-950 lg:max-w-xl">I am committed to lifelong learning and professional
            development.
            Below are some of the certifications I have earned, reflecting my dedication to mastering new technologies
            and best practices in web development.</p>
    </div>

    <div class="flex flex-wrap flex-1 gap-10 justify-center items-center">
        @foreach ($certificates as $certificate => $item)
            <x-certificate-card :image="$item['image']" :title="$item['title']" />
        @endforeach
    </div>
