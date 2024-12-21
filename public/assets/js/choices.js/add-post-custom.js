
document.addEventListener('DOMContentLoaded', function() {
    new Choices('#choices-remove-button', {
        allowHTML: true,
        removeItemButton: true,
      });
      var editor1 = new Quill("#editor1", {
        modules: { toolbar: "#toolbar1" },
        theme: "snow",
        placeholder: "Enter your messages...",
      });


      var quillEditor = document.getElementById('quill-editor-area');
      editor1.on('text-change', function() {
        quillEditor.value = editor1.root.innerHTML;
      });

      quillEditor.addEventListener('input', function() {
        editor1.root.innerHTML = quillEditor.value;
      });
});

// For Category
document.addEventListener('DOMContentLoaded', function() {
    new Choices('#choices-remove-button-category', {
        allowHTML: true,
        removeItemButton: true,
      });
      var editor1 = new Quill("#editor1", {
        modules: { toolbar: "#toolbar1" },
        theme: "snow",
        placeholder: "Enter your messages...",
      });


      var quillEditor = document.getElementById('quill-editor-area');
      editor1.on('text-change', function() {
        quillEditor.value = editor1.root.innerHTML;
      });

      quillEditor.addEventListener('input', function() {
        editor1.root.innerHTML = quillEditor.value;
      });
});

// For Tag
document.addEventListener('DOMContentLoaded', function() {
  new Choices('#choices-remove-button-tag', {
      allowHTML: true,
      removeItemButton: true,
    });
    var editor1 = new Quill("#editor1", {
      modules: { toolbar: "#toolbar1" },
      theme: "snow",
      placeholder: "Enter your messages...",
    });


    var quillEditor = document.getElementById('quill-editor-area');
    editor1.on('text-change', function() {
      quillEditor.value = editor1.root.innerHTML;
    });

    quillEditor.addEventListener('input', function() {
      editor1.root.innerHTML = quillEditor.value;
    });
});