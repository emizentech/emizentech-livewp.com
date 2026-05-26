(function () {
  // helper: toggle a wrapper div with class `boxClass`
  function toggleBox(ed, boxClass, placeholder) {
    var selectedHtml = ed.selection.getContent({ format: 'html' });
    var node = ed.selection.getNode();
    // find nearest ancestor div with the class
    var parentBox = ed.dom.getParent(node, 'div.' + boxClass);

    // also check if the current node itself is the wrapper
    if (!parentBox && node && node.nodeType === 1 && (' ' + (node.className || '') + ' ').indexOf(' ' + boxClass + ' ') !== -1) {
      parentBox = node;
    }

    if (parentBox) {
      // unwrap: remove the wrapper element but keep its children in place
      ed.dom.remove(parentBox, true); // 'true' = keep children
      ed.focus();
      return;
    }

    // not inside a wrapper -> create one (wrap selection or insert placeholder)
    if (selectedHtml) {
      ed.selection.setContent('<div class="' + boxClass + '">' + selectedHtml + '</div>');
    } else {
      ed.selection.setContent('<div class="' + boxClass + '">' + placeholder + '</div>');
    }
    ed.focus();
  }

  // Normal Box (TinyMCE 4 style)
  tinymce.create("tinymce.plugins.emzCstmBox", {
    init: function (ed, url) {
      ed.addButton("emz_cstm_box", {
        title: "Add Box",
        icon: "code",
        onclick: function () {
          toggleBox(ed, 'emz-cstm-box', 'Your text here...');
        }
      });
    }
  });
  tinymce.PluginManager.add("emz_cstm_box", tinymce.plugins.emzCstmBox);

  // Quote Box (TinyMCE 4 style)
  tinymce.create("tinymce.plugins.emzQCstmBox", {
    init: function (ed, url) {
      ed.addButton("emz_q_cstm_box", {
        title: "Add Quote Box",
        icon: "anchor",
        onclick: function () {
          toggleBox(ed, 'emz-q-cstm-box', 'Your text here...');
        }
      });
    }
  });
  tinymce.PluginManager.add("emz_q_cstm_box", tinymce.plugins.emzQCstmBox);
})();
