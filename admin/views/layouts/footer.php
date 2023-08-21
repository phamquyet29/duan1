
</div>
<script>
ClassicEditor
.create(document.querySelector('#editor'), {
toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList' , 'ImageUpload' , 'LinkImage' , 'ImageToolbar']})
.then(editor => {
window.editor = editor;
})
.catch(err => {
console.error(err.stack);
});
</script>
<script src="<?= ADMIN_ASSET ?>/custom/script.js"></script>
</body>
</html>