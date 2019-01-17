// Get JS for Bootstrap and its dependencies
try {
  window.Popper = require('popper.js').default;
  window.$ = window.jQuery = require('jquery');

  require('bootstrap');
} catch (e) {}

import ClipboardJS from 'clipboard';

// Bind all elements with .copy-btn to copy text on click
const clipboard = new ClipboardJS('.copy-btn');

// If copying went well, update text, otherwise show an alert
clipboard.on('success', function(e) {
  document.getElementById('copyAlert').innerHTML = "Copied to Clipboard!";
  setTimeout(function(){
    document.getElementById('copyAlert').innerHTML = "";
  }, 3000)
});

clipboard.on('error', function(e) {
  alert("Text cannot be copied automatically, please select and copy manually");
});

// Get the long link element
const longlinkEl = document.getElementById("longlink");

// If long link is on the page, focus on it
if (longlinkEl) {
  longlinkEl.focus();
}

// Get the short link element
const shortlinkEl = document.getElementById("shortlink");

// If long link is on the page, select it
if(shortlinkEl) {
  shortlinkEl.select();
}