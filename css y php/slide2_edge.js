/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "2.0.1",
   minimumCompatibleVersion: "2.0.0",
   build: "2.0.1.268",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'img1fw',
            type:'image',
            rect:['0','0','1166px','645px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"img1.fw.png",'0px','0px']
         },
         {
            id:'img24fw',
            type:'image',
            rect:['0','0','1166px','645px','auto','auto'],
            opacity:0.012578612978353,
            fill:["rgba(0,0,0,0)",im+"img24.fw.png",'0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '1166px'],
            ["style", "height", '645px'],
            ["style", "overflow", 'hidden']
         ],
         "${_img24fw}": [
            ["style", "opacity", '0']
         ],
         "${_img1fw}": [
            ["style", "opacity", '0']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 6000,
         autoPlay: true,
         timeline: [
            { id: "eid10", tween: [ "style", "${_img1fw}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 3000 },
            { id: "eid13", tween: [ "style", "${_img24fw}", "opacity", '1', { fromValue: '0.000000'}], position: 3000, duration: 3000 }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "alumno2");
