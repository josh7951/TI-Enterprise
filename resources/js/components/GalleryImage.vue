<template>
    <div class="gallery-image" v-bind:style="{ backgroundImage: 'url(' + image.url + ')' }">
    </div>
</template>

<script>
export default {
    name: 'GalleryImage',
    props: {
        image: {
            type: Object,
            required: true
        }
    }
}
</script>
