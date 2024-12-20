@section("title", "Keosh's Portfolio")
<x-layout>
    {{-- HERO SECTION --}}
    <section id="hero" class="sm:pl-16 pl-8 sm:pr-16 pr-8 sm:pb-24 pb-12">
        <div class="flex flex-col xl:flex-row w-full min-h-screen max-container gap-10 justify-center">
            <x-sections.hero />
        </div>
    </section>
    {{-- CERTIFICATE SECTION --}}
    <section class="padding">
        <div id="certificates" class="flex flex-col w-full max-container gap-12">
            <x-sections.certificates :certificates="$certificates" />
        </div>
    </section>
    {{-- BADGE SECTION --}}
    <section id="badges" class="padding  bg-khaki-400">
        <div class="flex flex-col w-full max-container">
            <x-sections.badge />
        </div>
    </section>
    {{-- SKILLS SECTION --}}
    <section id="about_me" class="padding">
        <section class="max-container w-full flex lg:flex-row flex-col gap-12 justify-around items-center my-10">
            <x-sections.skills :icons="$icons" />
        </section>
    </section>
    {{-- PROJECTS SECTION --}}
    <section id="projects" class="padding  bg-khaki-400">
        <x-sections.my-projects />
    </section>
    {{-- FOOTER SECTION --}}
    <section class="padding bg-black">
        <x-sections.footer :linkbtn="$linkbtn" />
    </section>
</x-layout>
