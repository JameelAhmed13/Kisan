(function () {
    // standard editor
    var editor7 = new Quill("#editor7", {
      modules: { toolbar: "#toolbar7" },
      theme: "snow",
      placeholder: "Enter your messages...",
    });
  
    var quillEditor = document.getElementById('quill-editor-area');
    editor7.on('text-change', function() {
      quillEditor.value = editor7.root.innerHTML;
    });
  
    quillEditor.addEventListener('input', function() {
      editor7.root.innerHTML = quillEditor.value;
    });
  })();