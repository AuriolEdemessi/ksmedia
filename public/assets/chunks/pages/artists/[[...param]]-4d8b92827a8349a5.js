(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[2175],{20640:function(e,t,n){"use strict";var r=n(11742),i={"text/plain":"Text","text/html":"Url",default:"Text"};e.exports=function(e,t){var n,o,s,l,a,u,c=!1;t||(t={}),n=t.debug||!1;try{if(s=r(),l=document.createRange(),a=document.getSelection(),(u=document.createElement("span")).textContent=e,u.ariaHidden="true",u.style.all="unset",u.style.position="fixed",u.style.top=0,u.style.clip="rect(0, 0, 0, 0)",u.style.whiteSpace="pre",u.style.webkitUserSelect="text",u.style.MozUserSelect="text",u.style.msUserSelect="text",u.style.userSelect="text",u.addEventListener("copy",(function(r){if(r.stopPropagation(),t.format)if(r.preventDefault(),"undefined"===typeof r.clipboardData){n&&console.warn("unable to use e.clipboardData"),n&&console.warn("trying IE specific stuff"),window.clipboardData.clearData();var o=i[t.format]||i.default;window.clipboardData.setData(o,e)}else r.clipboardData.clearData(),r.clipboardData.setData(t.format,e);t.onCopy&&(r.preventDefault(),t.onCopy(r.clipboardData))})),document.body.appendChild(u),l.selectNodeContents(u),a.addRange(l),!document.execCommand("copy"))throw new Error("copy command was unsuccessful");c=!0}catch(d){n&&console.error("unable to copy using execCommand: ",d),n&&console.warn("trying IE specific stuff");try{window.clipboardData.setData(t.format||"text",e),t.onCopy&&t.onCopy(window.clipboardData),c=!0}catch(d){n&&console.error("unable to copy using clipboardData: ",d),n&&console.error("falling back to prompt"),o=function(e){var t=(/mac os x/i.test(navigator.userAgent)?"\u2318":"Ctrl")+"+C";return e.replace(/#{\s*key\s*}/g,t)}("message"in t?t.message:"Copy to clipboard: #{key}, Enter"),window.prompt(o,e)}}finally{a&&("function"==typeof a.removeRange?a.removeRange(l):a.removeAllRanges()),u&&document.body.removeChild(u),s()}return c}},12757:function(e,t,n){"use strict";var r=n(85893);t.Z=function(e){var t=e.children;return(0,r.jsx)("div",{className:"RichText",children:t})}},76557:function(e,t,n){"use strict";n.d(t,{Z:function(){return u}});var r=n(67294),i=n(11163),o=n(51526),s=n(17064),l=n(85893),a={hidden:{opacity:0,transition:{ease:"linear",duration:.3,delay:0}},visible:{opacity:1,transition:{ease:"linear",duration:.3,delay:.2}}};function u(e){var t=e.children,n=e.id,u=(0,i.useRouter)(),c=(0,r.useRef)(!1);return(0,r.useEffect)((function(){u.beforePopState((function(){return c.current=!0,setTimeout((function(){c.current=!1}),2e3),!0}))}),[]),(0,r.useEffect)((function(){c.current||(document.scrollingElement.scrollTop=0)}),[]),(0,l.jsx)(o.M,{mode:"wait",onExitComplete:function(){document.scrollingElement.scrollTop=0},children:(0,l.jsx)(s.E.div,{initial:"hidden",animate:"visible",exit:"hidden",variants:a,children:t},n)})}},57960:function(e,t,n){"use strict";n.d(t,{Z:function(){return c}});var r=n(16835),i=n(67294),o=n(20640),s=n.n(o);var l=function(e){void 0===e&&(e={});var t=(0,i.useState)(e),n=t[0],r=t[1];return[n,(0,i.useCallback)((function(e){r((function(t){return Object.assign({},t,e instanceof Function?e(t):e)}))}),[])]},a=function(){var e=function(){var e=(0,i.useRef)(!1),t=(0,i.useCallback)((function(){return e.current}),[]);return(0,i.useEffect)((function(){return e.current=!0,function(){e.current=!1}}),[]),t}(),t=l({value:void 0,error:void 0,noUserInteraction:!0}),n=t[0],r=t[1];return[n,(0,i.useCallback)((function(t){var n,i;if(e())try{if("string"!==typeof t&&"number"!==typeof t){var o=new Error("Cannot copy typeof "+typeof t+" to clipboard, must be a string");return void r({value:t,error:o,noUserInteraction:!0})}if(""===t){o=new Error("Cannot copy empty string to clipboard.");return void r({value:t,error:o,noUserInteraction:!0})}i=t.toString(),n=s()(i),r({value:i,error:void 0,noUserInteraction:n})}catch(o){r({value:i,error:o,noUserInteraction:n})}}),[])]},u=n(85893),c=function(e){var t=e.url,n=void 0===t?null:t,o=e.title,s=void 0===o?null:o,l=(0,i.useState)("Share"),c=l[0],d=l[1],v=a(),f=(0,r.Z)(v,2),p=f[0],m=f[1];return(0,i.useEffect)((function(){p.value&&(d("Copied URL"),setTimeout((function(){d("Share")}),2e3))}),[p]),(0,u.jsx)("div",{className:"Share",children:(0,u.jsx)("button",{className:"Share-button",onClick:function(){var e,t;null!==(e=navigator)&&void 0!==e&&e.share?null===(t=navigator)||void 0===t||t.share({url:n||location.href,title:s||document.title}).then((function(){})).catch((function(){})):m(n||location.href)},children:c})})}},95244:function(e,t,n){"use strict";var r=n(67294);t.Z=function(e){var t=(0,r.useState)(!1),n=t[0],i=t[1];return(0,r.useEffect)((function(){function t(){i(!0)}function n(){i(!1)}return e.current&&(e.current.addEventListener("mouseenter",t),e.current.addEventListener("mouseleave",n)),function(){e.current&&(e.current.removeEventListener("mouseenter",t),e.current.removeEventListener("mouseleave",n))}}),[]),n}},69014:function(e,t,n){"use strict";n.r(t),n.d(t,{__N_SSG:function(){return ee},default:function(){return te}});var r,i=n(11163),o=n(76056),s=n(36598),l=n(27812),a=n(50029),u=n(87794),c=n.n(u),d=n(9008),v=n.n(d),f=n(67294),p=n(2731),m=n(69031),h=n(16835),g=n(76557),x=n(46092),b=n(41664),j=n.n(b),w=n(72291),y=n.n(w),E=n(94184),C=n.n(E),S=n(31102),k=n(96248),N=n(68010),O=n(7794),P=n(85893),D=400,I=32,L=function(e){var t,n,r,i,o,s,l,a=e.post,u=(0,f.useRef)(null),c=(0,S.Z)(),d=(0,f.useState)(0),v=d[0],p=d[1],m=y()(),h=m.openPortal,g=m.closePortal,x=m.isOpen,b=m.Portal;var w=C()(["PostArtists"]);return(0,P.jsxs)("article",{className:w,ref:u,onMouseEnter:function(e){!function(){if(!u.current)return;if(!N.Z)return;var e=u.current.getBoundingClientRect();e.left+e.width+D>c.width?p(e.left-D-I):p(e.left+e.width+I)}(),h(e)},onMouseLeave:function(e){g(e)},children:[(0,P.jsx)("h2",{className:"PostArtists-title",children:(0,P.jsx)(j(),{href:(0,k.sF)("artists",null===a||void 0===a?void 0:a.slug),scroll:!1,prefetch:!1,children:(0,P.jsx)("a",{children:null===a||void 0===a?void 0:a.title})})}),x&&(0,P.jsx)(b,{children:(null===a||void 0===a||null===(t=a.artistsImage)||void 0===t||null===(n=t.artistsImage)||void 0===n?void 0:n.mediaDetails)&&(0,P.jsx)("div",{style:{left:"".concat(v,"px")},className:"PostArtists-image-wrapper",children:(0,P.jsx)(O.Z,{image:null===a||void 0===a||null===(r=a.artistsImage)||void 0===r||null===(i=r.artistsImage)||void 0===i?void 0:i.mediaDetails,lazysizes:!0,withThumbnail:!0,attributes:{className:"PostArtists-image-img"},attributesFigure:{className:"PostArtists-image has-thumbnail"},color:null===a||void 0===a||null===(o=a.artistsImage)||void 0===o||null===(s=o.artistsImage)||void 0===s||null===(l=s.dominantColor)||void 0===l?void 0:l.dominantColor})})})]})},R=function(e){var t=e.post,n=(0,f.useRef)(null),r=C()(["PostArtists"]);return(0,P.jsx)("article",{className:r,ref:n,children:(0,P.jsx)("h2",{className:"PostArtists-title",children:(0,P.jsx)(j(),{href:(0,k.sF)("artists",null===t||void 0===t?void 0:t.slug),scroll:!1,prefetch:!1,children:(0,P.jsx)("a",{children:null===t||void 0===t?void 0:t.title})})})})},A=function(e){var t=e.posts,n=e.title,r=(0,x.Z)("( max-width: 800px )"),i="0"===n?"#":"."===n?"@":n;return(0,P.jsxs)("div",{className:"PostsGroupArtists",children:[(0,P.jsx)("h4",{className:"PostsGroupArtists-title",children:i}),t.map((function(e){return r?(0,P.jsx)(R,{post:null===e||void 0===e?void 0:e.node},e.node.databaseId):(0,P.jsx)(L,{post:null===e||void 0===e?void 0:e.node},e.node.databaseId)}))]})},_=function(e){var t=e.posts,n=e.filter;if(!t||!t.length)return(0,P.jsx)(P.Fragment,{});var r=(0,f.useState)({}),i=r[0],o=r[1];return(0,f.useEffect)((function(){var e=[];null===t||void 0===t||t.forEach((function(t){var n,r,i=void 0===(null===t||void 0===t||null===(n=t.node)||void 0===n?void 0:n.initialLetter)?".":null===t||void 0===t||null===(r=t.node)||void 0===r?void 0:r.initialLetter;e[i]||(e[i]=[]),e[i].push(t)})),o(e)}),[t]),(0,P.jsx)("section",{className:"PostsArtists",children:(0,P.jsx)(g.Z,{id:n,children:Object.entries(i).map((function(e){var t=(0,h.Z)(e,2),n=t[0],r=t[1];return(0,P.jsx)(A,{posts:r,title:n},n)}))})})},T=n(55597),Z=n(71383),U=n(19875);function F(){return M.apply(this,arguments)}function M(){return M=(0,a.Z)(c().mark((function e(){var t,n,i,o,s,l=arguments;return c().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t=l.length>0&&void 0!==l[0]?l[0]:null,n=l.length>1&&void 0!==l[1]?l[1]:null,i=l.length>2&&void 0!==l[2]&&l[2],o=(0,U.P)(r||(r=(0,Z.Z)(["\n        query ($after: String, $filter: String, $stati: [PostStatusEnum]) {\n            artistEntries(\n                first: 500\n                after: $after\n                where: { filter: $filter, orderby: { field: TITLE, order: ASC }, stati: $stati }\n            ) {\n                edges {\n                    node {\n                        databaseId\n                        title(format: RENDERED)\n                        slug\n                        initialLetter\n                        artistsImage {\n                            artistsImage {\n                                mediaDetails {\n                                    width\n                                    height\n                                    file\n                                    sizes {\n                                        sourceUrl\n                                        width\n                                        height\n                                    }\n                                }\n                                dominantColor {\n                                    dominantColor\n                                }\n                            }\n                        }\n                    }\n                }\n                pageInfo {\n                    hasNextPage\n                    endCursor\n                }\n            }\n        }\n    "]))),e.next=6,(0,U.K)(o,{after:n,filter:t,stati:i?["PUBLISH","DRAFT"]:["PUBLISH"]});case 6:return s=e.sent,e.abrupt("return",(null===s||void 0===s?void 0:s.artistEntries)||null);case 8:case"end":return e.stop()}}),e)}))),M.apply(this,arguments)}function z(e){var t=e.posts,n=e.tags,r=e.filter,i=(0,f.useState)(null===t||void 0===t?void 0:t.pageInfo),o=i[0],s=i[1],u=(0,f.useState)(null===t||void 0===t?void 0:t.edges),d=u[0],h=u[1];function g(){return(g=(0,a.Z)(c().mark((function e(){var t;return c().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(null!==o&&void 0!==o&&o.hasNextPage){e.next=2;break}return e.abrupt("return");case 2:return e.next=4,F(r,null===o||void 0===o?void 0:o.endCursor);case 4:null!==(t=e.sent)&&void 0!==t&&t.edges&&(h([].concat((0,l.Z)(d),(0,l.Z)(t.edges))),s(null===t||void 0===t?void 0:t.pageInfo));case 6:case"end":return e.stop()}}),e)})))).apply(this,arguments)}return(0,f.useEffect)((function(){return function(){}}),[]),(0,f.useEffect)((function(){h(null===t||void 0===t?void 0:t.edges),s(null===t||void 0===t?void 0:t.pageInfo)}),[t]),(0,P.jsxs)(P.Fragment,{children:[(0,P.jsx)(v(),{children:(0,P.jsx)("title",{children:"Artists \u2014 COLORSxSTUDIOS"})}),(0,P.jsx)(p.Z,{title:"Artists"}),(0,P.jsx)(m.$,{tags:n,filter:r}),(0,P.jsx)(_,{posts:d,filter:r}),(0,P.jsx)(T.Z,{base:"artists",filter:r,pageInfo:o,onClickCallback:function(){return g.apply(this,arguments)}})]})}var B=n(92836),$=function(e){var t,n,r=e.post,i=null===r||void 0===r||null===(t=r.artistsImage)||void 0===t?void 0:t.artistsImage;return(0,P.jsx)("div",{className:"SingleArtists-image",children:i&&(0,P.jsx)(O.Z,{image:null===i||void 0===i?void 0:i.mediaDetails,lazysizes:!0,withThumbnail:!0,attributes:{className:"SingleArtists-image-image-img"},attributesFigure:{className:"SingleArtists-image-image has-thumbnail"},color:null===i||void 0===i||null===(n=i.dominantColor)||void 0===n?void 0:n.dominantColor})})},H=n(83920),V=n(12757),q=n(57960),G=function(e){var t,n,r,i=e.post,o=null===i||void 0===i||null===(t=i.artistVibes)||void 0===t?void 0:t.nodes;return(0,P.jsxs)("div",{className:"SingleArtists-links",children:[(null===i||void 0===i||null===(n=i.artistsSocialProfiles)||void 0===n?void 0:n.artistsProfiles)&&(0,P.jsxs)("div",{className:"Links",children:[(0,P.jsx)("h4",{className:"Links-title",children:"Follow"}),(0,P.jsx)("div",{className:"Links-links",children:null===i||void 0===i||null===(r=i.artistsSocialProfiles)||void 0===r?void 0:r.artistsProfiles.map((function(e,t){return(0,P.jsx)("a",{href:null===e||void 0===e?void 0:e.url,children:null===e||void 0===e?void 0:e.title},t)}))})]}),(null===o||void 0===o?void 0:o.length)>0&&(0,P.jsxs)("div",{className:"Links",children:[(0,P.jsx)("h4",{className:"Links-title",children:"Tags"}),(0,P.jsx)("div",{className:"Links-links",children:o.map((function(e,t){return(0,P.jsx)(j(),{href:(0,k.Lq)("artists",e.slug),scroll:!1,prefetch:!1,children:(0,P.jsx)("a",{children:null===e||void 0===e?void 0:e.name})},t)}))})]})]})},W=function(e){var t,n,r=e.post;return(0,P.jsxs)("div",{className:"SingleArtists-main",children:[(0,P.jsx)("h2",{className:"SingleArtists-title",children:null===r||void 0===r?void 0:r.title}),(null===r||void 0===r||null===(t=r.artistsDescription)||void 0===t?void 0:t.artistsDescription)&&(0,P.jsx)("div",{className:"SingleArtists-description",children:(0,P.jsx)(V.Z,{children:(0,P.jsx)(H.Z,{html:null===r||void 0===r||null===(n=r.artistsDescription)||void 0===n?void 0:n.artistsDescription})})}),(0,P.jsx)(G,{post:r}),(0,P.jsx)(q.Z,{})]})},X=n(88203),K=function(e){var t,n=e.post,r=null===n||void 0===n||null===(t=n.showEntries)||void 0===t?void 0:t.edges,i=r.map((function(e){var t,n,r,i,o,s,l,a;return{video:null===e||void 0===e||null===(t=e.node)||void 0===t||null===(n=t.showsVideo)||void 0===n?void 0:n.showsVideo,title:null===e||void 0===e||null===(r=e.node)||void 0===r?void 0:r.title,description:null===e||void 0===e||null===(i=e.node)||void 0===i||null===(o=i.showsDescription)||void 0===o?void 0:o.showsDescription,tags:null===e||void 0===e||null===(s=e.node)||void 0===s||null===(l=s.showFormats)||void 0===l?void 0:l.nodes,link:(0,k.sF)("shows",null===e||void 0===e||null===(a=e.node)||void 0===a?void 0:a.slug)}}));return r?(0,P.jsx)(X.Z,{videos:i}):(0,P.jsx)(P.Fragment,{})},Y=n(55136),J=function(e){var t,n=e.post;return(0,P.jsx)(P.Fragment,{children:(0,P.jsxs)("main",{className:"SingleArtists",children:[(0,P.jsx)($,{post:n}),(0,P.jsx)(W,{post:n}),(0,P.jsx)(K,{post:n}),(0,P.jsx)(Y.Z,{modules:null===n||void 0===n||null===(t=n.pageModules)||void 0===t?void 0:t.modules})]})})};function Q(e){var t,n,r,i,o,s,l=e.post;return(0,P.jsxs)(P.Fragment,{children:[(0,P.jsx)(v(),{children:(0,P.jsxs)("title",{children:[l.title," \u2014 COLORSxSTUDIOS"]})}),(0,P.jsx)(p.Z,{title:null===l||void 0===l?void 0:l.title,description:(0,B.Nw)(null===l||void 0===l||null===(t=l.artistsDescription)||void 0===t?void 0:t.artistsDescription,[]),image:null===l||void 0===l||null===(n=l.artistsImage)||void 0===n||null===(r=n.artistsImage)||void 0===r||null===(i=r.mediaDetails)||void 0===i||null===(o=i.sizes)||void 0===o||null===(s=o[3])||void 0===s?void 0:s.sourceUrl}),(0,P.jsx)(J,{post:l})]})}var ee=!0;function te(e){return(0,i.useRouter)().isFallback?(0,P.jsx)(s.Z,{}):null!==e&&void 0!==e&&e.post?(0,P.jsx)(Q,{post:e.post}):e.posts?(0,P.jsx)(z,{posts:e.posts,tags:e.tags,filter:e.filter}):(0,P.jsx)(o.Z,{title:"404"})}},29461:function(e,t,n){"use strict";function r(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=[];return null!==e&&void 0!==e&&e.files?((t=e.files).sort((function(e,t){return e.width>t.width?1:-1})),t=(t=t.filter((function(e){return"video/mp4"===e.type}))).filter((function(e){return"hls"!==e.quality}))):t}n.d(t,{l:function(){return r}})},22657:function(e,t,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/artists/[[...param]]",function(){return n(69014)}])},72291:function(e,t,n){"use strict";var r=this&&this.__assign||function(){return r=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var i in t=arguments[n])Object.prototype.hasOwnProperty.call(t,i)&&(e[i]=t[i]);return e},r.apply(this,arguments)},i=this&&this.__rest||function(e,t){var n={};for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&t.indexOf(r)<0&&(n[r]=e[r]);if(null!=e&&"function"===typeof Object.getOwnPropertySymbols){var i=0;for(r=Object.getOwnPropertySymbols(e);i<r.length;i++)t.indexOf(r[i])<0&&Object.prototype.propertyIsEnumerable.call(e,r[i])&&(n[r[i]]=e[r[i]])}return n},o=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0});var s=n(67294),l=n(73935),a=o(n(38137));t.errorMessage1="You must either add a `ref` to the element you are interacting with or pass an `event` to openPortal(e) or togglePortal(e).",t.default=function(e){void 0===e&&(e={});var n=e.closeOnOutsideClick,o=void 0===n||n,u=e.closeOnEsc,c=void 0===u||u,d=e.bindTo,v=e.isOpen,f=void 0!==v&&v,p=e.onOpen,m=e.onClose,h=e.onPortalClick,g=i(e,["closeOnOutsideClick","closeOnEsc","bindTo","isOpen","onOpen","onClose","onPortalClick"]),x=a.default(),b=x.isServer,j=x.isBrowser,w=s.useState(f),y=w[0],E=w[1],C=s.useRef(y),S=s.useCallback((function(e){C.current=e,E(e)}),[]),k=s.useRef(),N=s.useRef(j?document.createElement("div"):null);s.useEffect((function(){j&&!N.current&&(N.current=document.createElement("div"))}),[j,N]);var O=s.useMemo((function(){if(!b)return d&&l.findDOMNode(d)||document.body}),[b,d]),P=function(e){if(!e)return{portal:N,targetEl:k,event:e};var t=e||{};t.persist&&t.persist(),t.portal=N,t.targetEl=k,t.event=e;var n=e.currentTarget;return!k.current&&n&&n!==document&&(k.current=t.currentTarget),t},D=Object.entries(g).reduce((function(e,t){var n=t[0],r=t[1];return e[n]=function(e){b||r(P(e))},e}),{}),I=s.useCallback((function(e){if(!b){var n=P(e);if(null==k.current)throw setTimeout((function(){return S(!0)}),0),Error(t.errorMessage1);p&&p(n),S(!0)}}),[b,N,S,k,p]),L=s.useCallback((function(e){if(!b){var t=P(e);m&&C.current&&m(t),C.current&&S(!1)}}),[b,m,S]),R=s.useCallback((function(e){return C.current?L(e):I(e)}),[L,I]),A=s.useCallback((function(e){return"Escape"===e.key&&c?L(e):void 0}),[c,L]),_=s.useCallback((function(e){var t=function(t){return t.current.contains(e.target)};t(N)||0!==e.button||!C.current||t(k)||o&&L(e)}),[b,L,o,N]),T=s.useCallback((function(e){if(!b&&N.current instanceof HTMLElement){var t=P(e);N.current.contains(t.target)&&h&&h(t),_(e)}}),[_]),Z=s.useRef({});s.useEffect((function(){if(!b&&O instanceof HTMLElement&&N.current instanceof HTMLElement){var e={onScroll:"scroll",onWheel:"wheel"},t=N.current;return O.appendChild(N.current),Object.entries(e).forEach((function(e){var t=e[0],n=e[1];g[t]&&(Z.current[t]=function(e){return g[t](P(e))},document.addEventListener(n,Z.current[t]))})),document.addEventListener("keydown",A),document.addEventListener("mousedown",T),function(){Object.entries(e).forEach((function(e){var t=e[0],n=e[1];g[t]&&(document.removeEventListener(n,Z.current[t]),delete Z.current[t])})),document.removeEventListener("keydown",A),document.removeEventListener("mousedown",T),O.removeChild(t)}}}),[b,_,A,O,N]);var U=s.useCallback((function(e){var t=e.children;return null!=N.current?l.createPortal(t,N.current):null}),[N]);return Object.assign([I,L,C.current,U,R,k,N],r(r({isOpen:C.current,openPortal:I,ref:k,closePortal:L,togglePortal:R,Portal:U,portalRef:N},D),{bind:r({ref:k},D)}))}},11742:function(e){e.exports=function(){var e=document.getSelection();if(!e.rangeCount)return function(){};for(var t=document.activeElement,n=[],r=0;r<e.rangeCount;r++)n.push(e.getRangeAt(r));switch(t.tagName.toUpperCase()){case"INPUT":case"TEXTAREA":t.blur();break;default:t=null}return e.removeAllRanges(),function(){"Caret"===e.type&&e.removeAllRanges(),e.rangeCount||n.forEach((function(t){e.addRange(t)})),t&&t.focus()}}},38137:function(e,t){"use strict";var n,r=this&&this.__assign||function(){return r=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var i in t=arguments[n])Object.prototype.hasOwnProperty.call(t,i)&&(e[i]=t[i]);return e},r.apply(this,arguments)};Object.defineProperty(t,"__esModule",{value:!0}),function(e){e.Browser="browser",e.Server="server",e.Native="native"}(n=t.Device||(t.Device={}));var i=n.Browser,o=n.Server,s=n.Native,l=!("undefined"===typeof window||!window.document||!window.document.createElement),a="undefined"!=typeof navigator&&"ReactNative"==navigator.product?s:l?i:o,u={isBrowser:a===i,isServer:a===o,isNative:a===s,device:a,canUseWorkers:"undefined"!==typeof Worker,canUseEventListeners:a===i&&!!window.addEventListener,canUseViewport:a===i&&!!window.screen},c=function(){return function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];return e.reduce((function(e,t){return r(r({},e),t)}),{})}((e=u,Object.keys(e).map((function(t){return e[t]})),u));var e},d=c();t.weAreServer=function(){u.isServer=!0,d=c()},t.useSSR=function(){return d},t.default=t.useSSR}},function(e){e.O(0,[6883,9371,2144,8983,9774,2888,179],(function(){return t=22657,e(e.s=t);var t}));var t=e.O();_N_E=t}]);