<template>
    <div>
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="is-active"><a href="#" aria-current="page">Gallery</a></li>
            </ul>
        </nav>
        <div v-if="this.imageShown !== undefined">
        </div>
        <section v-else id="gallery-container">
            <gallery-image 
            :image="image" 
            v-for="image in this.images" 
            v-bind:key="image.id"
            @clicked="onChildImageClicked"
            >
            </gallery-image>
        </section>
        <div v-if="this.imageShown !== undefined" id="image-modal" class="modal is-active">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">{{ this.imageShown.name }}</p>
                    <button class="delete" aria-label="close" v-on:click="this.onModalClosed"></button>
                </header>
                <section class="modal-card-body">
                    <div class="columns is-flex is-centered">
                        <img id="modal-image" :src="this.imageShown.url"></img>
                    </div>
                    <p v-if="this.imageShown.description != null" class="modal-card-description">{{ this.imageShown.description }}</p>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Gallery',
    data() {
        return {
            imageShown: undefined,
        };
    },
    props: {
        images: {
            type: Array,
            required: true
        }
    },
    methods: {
        onChildImageClicked(value) {
            this.imageShown = value;
        },
        onModalClosed() {
            this.imageShown = undefined;
        }
    }
}
</script>
