<template>
    <div 
    class="gallery-image" 
    v-bind:style="{ backgroundImage: 'url(' + image.url + ')' }"
    :title="image.name"
    v-on:click="this.onImageClick"
    >
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
    },
    methods: {
        onImageClick (e) {
            this.$emit('clicked', this.image);
        }
    },
}
// :onclick = "'this.displayedImage = console.log(' + this.displayedImage + ');'"
</script>
