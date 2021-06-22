<template>
    <div>
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="is-active"><a href="#" aria-current="page">Gallery</a></li>
            </ul>
        </nav>
        <section id="gallery-container">
            <gallery-image 
            :image="image" 
            v-for="image in this.images" 
            v-bind:key="image.id"
            >
            </gallery-image>
        </section>
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
}
</script>
