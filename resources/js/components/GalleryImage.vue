<template>
    <div class="gallery-image">
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
// <img :src="this.image.url" class="gallery-image">
//  style="background: url('{{this.image.url}}')"
</script>
