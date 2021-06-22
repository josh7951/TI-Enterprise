<template>
    <div>
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="is-active"><a href="#" aria-current="page">Gallery</a></li>
            </ul>
            <section>
                <div v-for = "image in this.images">
                    {{ image }}
                </div>
            </section>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Gallery',
    props: {
        images: {
            type: Array,
            required: true
        }
    },
    mounted() {
        console.log('Gallery Mounted');
    }
}
</script>

<section class="hero is-medium is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1" style="text-align:center;">Gallery</h1>
        </div>
    </div>
</section>
