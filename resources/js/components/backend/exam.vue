<template>
    <div>
        Hello !
        <b-icon-blockquote-right></b-icon-blockquote-right>
        <b-spinner></b-spinner>
        <b-iconstack font-scale="5" animation="spin">
            <b-icon stacked icon="camera" variant="info" scale="0.75" shift-v="-0.25"></b-icon>
            <b-icon stacked icon="slash-circle" variant="danger"></b-icon>
        </b-iconstack>
    </div>
</template>

<script>
export default {
    name: "exam"
};
</script>

<style scoped></style>
