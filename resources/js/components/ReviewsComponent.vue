<template>
    <carousel :perPage="1" :navigationEnabled="false">
        <slide>
            <blockquote cite="https://www.facebook.com/RickDLDawson/posts/10162787585785354" class="text-sm leading-normal mb-4"><span>&ldquo;</span>Ross from Digizu has been nothing but exceptional, whenever I have needed my website changing, editing or even a complete overhaul Ross has always been there to do what is needed to be done. <span class="hidden md:inline">When you own a small business like myself you need a company like Digizu who can keep the standard of work amazing whilst keeping the price very reasonable. I also love that its also very personal, and due to this I now have a fantastic working relationship with Ross.</span><span>&rdquo;</span></blockquote>
            <p class="text-sm font-bold">Rick Dawson, PlayaWay Abroad</p>
            <!-- <a href="https://www.facebook.com/RickDLDawson/posts/10162787585785354" class="inline-block bg-green-lightest text-green-darkest border border-green-lightest px-4 py-2 no-underline  hover:bg-transparent hover:border-green-lightest hover:text-green-lightest font-condensed leading-normal shadow-lg">Read full review</a> -->
        </slide>
        <slide>
            <blockquote cite="https://www.facebook.com/julian.howarth.9/posts/1362839133852003" class="text-sm leading-normal mb-4"><span>&ldquo;</span><span class="hidden md:inline">It has been my dream to construct a platform to run my business, my way. </span>I engaged Ross at Digizu to fulfil my requirements<span class="md:hidden">.</span> <span class="hidden md:inline">(which wasn’t easy due to my lack of knowledge in this area).</span> <span class="hidden md:inline">I knew what I wanted my platform to do in order to facilitate my duties but trying to explain that proves difficult.</span> Ross is truly amazing and has delivered me a platform that is beyond anything I could've imagined.<span>&rdquo;</span></blockquote>
            <p class="text-sm font-bold">Julian Howarth, Nucar</p>
            <!-- <a href="https://www.facebook.com/julian.howarth.9/posts/1362839133852003" class="inline-block bg-green-lightest text-green-darkest border border-green-lightest px-4 py-2 no-underline  hover:bg-transparent hover:border-green-lightest hover:text-green-lightest font-condensed leading-normal shadow-lg">Read full review</a> -->
        </slide>
    </carousel>
</template>

<script>
    
    import { Carousel, Slide } from 'vue-carousel'
    
    export default {
        components: {
            Carousel,
            Slide
        }
    }

</script>