<template>
    <div id="app">
        <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
    </div>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
// import SimpleUploadAdapter from '@ckeditor/ckeditor5-upload/src/adapters/simpleuploadadapter';

export default {
    name: 'app',
    data() {
        return {
            editor: ClassicEditor,
            editorData: '<p>Content of the editor.</p>',
            plugins: [SimpleUpload],
            editorConfig: {
                language: 'en',
                // extraPlugins: [this.SimpleUploadAdapter],
            },
            simpleUpload: {
                // The URL that the images are uploaded to.
                uploadUrl: 'http://example.com',

                // Enable the XMLHttpRequest.withCredentials property.
                withCredentials: true,

                // Headers sent along with the XMLHttpRequest to the upload server.
                headers: {
                    'X-CSRF-TOKEN': 'CSRF-Token',
                    Authorization: 'Bearer <JSON Web Token>'
                }
            }
        };
    }
}
</script>


<!--<template>-->
<!--    <p>{{ greeting }} World!</p>-->
<!--    <classic-editor :editor="editor" v-model="editorData" :config="editorConfig"></classic-editor>-->
<!--</template>-->

<!--<script>-->
<!--import CKEditor from '@ckeditor/ckeditor5-vue';-->
<!--import ClassicEditor from '@ckeditor/ckeditor5-build-classic';-->

<!--export default {-->
<!--    name: 'ExampleComponent',-->
<!--    components: {-->
<!--        CKEditor,-->
<!--        ClassicEditor-->
<!--    },-->
<!--    data() {-->
<!--        return {-->
<!--            greeting: "Hello HELLOOO",-->
<!--            editor: ClassicEditor,-->
<!--            editorData: '<p>Content of the editor.</p>',-->
<!--            editorConfig: {-->
<!--                // The configuration of the editor.-->
<!--            }-->
<!--        };-->
<!--    }-->
<!--};-->
<!--</script>-->

<!--<style scoped>-->
<!--p {-->
<!--    font-size: 2em;-->
<!--    text-align: center;-->
<!--}-->
<!--</style>-->
