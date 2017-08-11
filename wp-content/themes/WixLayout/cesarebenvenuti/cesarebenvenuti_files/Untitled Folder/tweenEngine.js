define("tweenEngine/animationsFactory/animationsFactory",["lodash"],function(a){"use strict";function b(){function d(c){var d="BaseSequence";this.timeline=b[d](c?a.cloneDeep(c):{})}function e(a){return new d(a)}function f(c,d,e,f,g){var h=b[c];return h?h(d,e,f,g?a.cloneDeep(g):{}):(console.error("Warning:",c,"is not a registered animation. skipping."),null)}function g(b,d,e,f,g,h){var i=c[b];return i?i(d,e,f,g,h?a.cloneDeep(h):{}):(console.error("Warning:",b,"is not a registered transition. skipping."),null)}function h(a,d){c[a]&&console.error("Warning: there is already a transition with the name",a),b[a]=d}function i(a,d){b[a]&&console.error("Warning: there is already an animation with the name",a),c[a]=d}function j(a){return(b[a]||c[a]||{}).properties||{}}function k(){return b}function l(){return c}var b={},c={};return d.prototype.add=function(a,b,c){return b="undefined"==typeof b?"+=0":b,c=c||"normal",this.timeline.add(a,b,c),this},d.prototype.get=function(){return this.timeline},{animate:f,transition:g,sequence:e,registerAnimation:h,registerTransition:i,getProperties:j,getAnimationsDefs:k,getTransitionsDefs:l}}return b}),define("tweenEngine/tweenEngineGreenSock/tweenEngineGreenSock",["lodash","zepto","utils","TweenMax","TimelineMax","ScrollToPlugin"],function(a,b,c,d,e){"use strict";function h(b,c,d){var e;return a.isArray(b)||(b=b instanceof NodeList?a.toArray(b):[b]),c=c||{},c=w(c,[d,f]),r(c),(e=c.from&&c.to?q:c.from?o:p)(b,c)}function i(a,b){return a=w(a||{},[b,g]),r(a),new e(a)}function j(b,c){return c=c?a.cloneDeep(c):{},c.duration=0,c.delay=0,c.to=c.to||{},h(b,c,a.keys(c))}function k(b,c){b.paused()||(b.pause(),v(b)),a.isNumber(c)&&b.progress(c,!0),b.kill(),b.clear&&b.clear()}function l(a){d.ticker.addEventListener("tick",a)}function m(a){d.ticker.removeEventListener("tick",a)}function n(a){return d.isTweening(a)}function o(b,c){var e,f,g,h,j,k,l;return e=c.duration,j=c.stagger,l=c.delay,f=a.defaults(c,c.from),f.data=f.data||{},delete f.from,delete f.duration,delete f.stagger,"undefined"!=typeof j?(k=f.data,f.data={},delete f.delay,g=d.staggerFrom(b,e,f,j),h=i({data:k,delay:l}).add(g)):g=d.from(b,e,f),h||g}function p(b,c){var e,f,g,h,j,k,l;return e=c.duration,j=c.stagger,l=c.delay,f=a.defaults(c,c.to||{}),f.data=f.data||{},delete f.to,delete f.duration,delete f.stagger,"undefined"!=typeof j?(k=f.data,f.data={},delete f.delay,g=d.staggerTo(b,e,f,j),h=i({data:k,delay:l}).add(g)):g=d.to(b,e,f),h||g}function q(b,c){var e,f,g,h,j,k,l,m;return g=c.duration,k=c.stagger,m=c.delay,f=c.from,e=c.to,e.data=e.data||{},delete c.to,delete c.from,delete c.duration,delete c.stagger,delete e.duration,delete e.stagger,e=a.merge(e,c),"undefined"!=typeof k?(l=e.data,e.data={},delete e.delay,h=d.staggerFromTo(b,g,f,e,k),j=i({data:l,delay:m}).add(h)):h=d.fromTo(b,g,f,e),j||h}function r(a){return a.data=a.data||{},a.callbacks&&(a.data.callbacks={},a.callbacks.onComplete&&(a.data.callbacks.onComplete=a.callbacks.onComplete,a.onComplete=s,a.onCompleteParams=["{self}"]),a.callbacks.onStart&&(a.data.callbacks.onStart=a.callbacks.onStart,a.onStart=t,a.onStartParams=["{self}"]),a.callbacks.onUpdate&&(a.data.callbacks.onUpdate=a.callbacks.onUpdate,a.onUpdate=u,a.onUpdateParams=["{self}"]),a.callbacks.onInterrupt&&(a.data.callbacks.onInterrupt=a.callbacks.onInterrupt)),delete a.callbacks,a}function s(a){a.data&&a.data.callbacks&&"function"==typeof a.data.callbacks.onComplete&&a.data.callbacks.onComplete(a)}function t(a){a.data&&a.data.callbacks&&"function"==typeof a.data.callbacks.onStart&&a.data.callbacks.onStart(a)}function u(a){a.data&&a.data.callbacks&&"function"==typeof a.data.callbacks.onUpdate&&a.data.callbacks.onUpdate(a)}function v(a){a.data&&a.data.callbacks&&"function"==typeof a.data.callbacks.onInterrupt&&a.data.callbacks.onInterrupt(a)}function w(b,c){var d=a.union.apply(a,c);return a.forEach(b,function(b,e,f){"to"===e||"from"===e?w(f[e],c):a.indexOf(d,e)<0&&delete f[e]},this),b}function x(a,b,c,e){return d.delayedCall(a,b,c,e)}function y(b,c,e,f,g,h){var i={timeScale:e},j={timeScale:f,easing:g||"Linear.easeNone"};return h&&a.extend(j,h),0===e&&b.paused()&&b.play(),d.fromTo(b,c,i,j)}function z(a,b){"function"==typeof d.lagSmoothing&&d.lagSmoothing(a,b)}var f=["ease","duration","delay","to","from","repeat","yoyo","repeatDelay","easeParams","stagger","transformOrigin","clearProps","paused","overwrite","autoClear","parseTransform","fireUpdateCommand","data","elementClearParams","perspective","transformPerspective","immediateRender","callbacks"],g=["delay","repeat","yoyo","repeatDelay","stagger","paused","align","tweens","autoClear","data","elementClearParams","callbacks"];return{timeline:i,tween:h,set:j,kill:k,addTickerEvent:l,removeTickerEvent:m,isTweening:n,getBoundingRect:c.domMeasurements.getBoundingRect,getBoundingContentRect:c.domMeasurements.getBoundingContentRect,delayedCall:x,animateTimeScale:y,adjustLagSmoothing:z}}),define("tweenEngine",["tweenEngine/animationsFactory/animationsFactory","tweenEngine/tweenEngineGreenSock/tweenEngineGreenSock"],function(a,b){"use strict";function c(){var c=new a;return{factory:{animate:c.animate,transition:c.transition,sequence:c.sequence,registerAnimation:c.registerAnimation,registerTransition:c.registerTransition,getProperties:c.getProperties,getAnimationsDefs:c.getAnimationsDefs,getTransitionsDefs:c.getTransitionsDefs},engine:{timeline:b.timeline,tween:b.tween,set:b.set,kill:b.kill,addTickerEvent:b.addTickerEvent,removeTickerEvent:b.removeTickerEvent,isTweening:b.isTweening,getBoundingRect:b.getBoundingRect,getBoundingContentRect:b.getBoundingContentRect,delayedCall:b.delayedCall,animateTimeScale:b.animateTimeScale,adjustLagSmoothing:b.adjustLagSmoothing}}}return c});