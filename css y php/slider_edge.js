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
            id:'escuela1',
            type:'image',
            rect:['0','0','700px','435px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"escuela1.png",'0px','0px']
         },
         {
            id:'escuela2',
            type:'image',
            rect:['0','0','700px','435px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"escuela2.png",'0px','0px']
         },
         {
            id:'escuela3',
            type:'image',
            rect:['0','0','700px','435px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"escuela3.png",'0px','0px']
         },
         {
            id:'escuela4',
            type:'image',
            rect:['0','0','700px','435px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"escuela4.png",'0px','0px']
         },
         {
            id:'escuela5',
            type:'image',
            rect:['0','0','700px','435px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"escuela5.png",'0px','0px']
         },
         {
            id:'escuela6',
            type:'image',
            rect:['0','0','700px','435px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"escuela6.png",'0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_escuela3}": [
            ["style", "opacity", '0']
         ],
         "${_escuela1}": [
            ["style", "opacity", '0']
         ],
         "${_escuela4}": [
            ["style", "opacity", '0']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '700px'],
            ["style", "height", '435px'],
            ["style", "overflow", 'hidden']
         ],
         "${_escuela5}": [
            ["style", "opacity", '0']
         ],
         "${_escuela2}": [
            ["style", "opacity", '0']
         ],
         "${_escuela6}": [
            ["style", "opacity", '0']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 36000,
         autoPlay: true,
         timeline: [
            { id: "eid13", tween: [ "style", "${_escuela4}", "opacity", '1', { fromValue: '0.000000'}], position: 18000, duration: 6000 },
            { id: "eid6", tween: [ "style", "${_escuela2}", "opacity", '1', { fromValue: '0.000000'}], position: 6000, duration: 6000 },
            { id: "eid10", tween: [ "style", "${_escuela3}", "opacity", '1', { fromValue: '0.000000'}], position: 12000, duration: 6000 },
            { id: "eid3", tween: [ "style", "${_escuela1}", "opacity", '1', { fromValue: '0.000000'}], position: 0, duration: 6000 },
            { id: "eid19", tween: [ "style", "${_escuela6}", "opacity", '1', { fromValue: '0.000000'}], position: 30000, duration: 6000 },
            { id: "eid16", tween: [ "style", "${_escuela5}", "opacity", '1', { fromValue: '0.000000'}], position: 24000, duration: 6000 }         ]
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
})(jQuery, AdobeEdge, "EDGE-54176936");
