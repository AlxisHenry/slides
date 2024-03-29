import Reveal from "https://unpkg.com/reveal.js@4.4.0/dist/reveal.esm.js";
import Highlight from "https://unpkg.com/reveal.js@4.4.0/plugin/highlight/highlight.esm.js";
import Markdown from "https://unpkg.com/reveal.js@4.4.0/plugin/markdown/markdown.esm.js";
import Notes from "https://unpkg.com/reveal.js@4.4.0/plugin/notes/notes.esm.js";

let deck = new Reveal({
  plugins: [Highlight, Markdown, Notes],
});

const inIframe = document.referrer !== "";

deck.initialize({
  width: 1920,
  height: 1080,
  maxScale: 1,
  progress: inIframe ? true : false,
  controls: inIframe ? true : false,
  hash: true,
  showNotes: false,
  transition: document.body.dataset.transition ?? "slide",
  display: "flex",
  mouseWheel: true
});