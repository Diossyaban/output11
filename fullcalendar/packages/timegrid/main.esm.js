
import{createFormatter,removeElement,computeEventDraggable,computeEventStartResizable,computeEventEndResizable,cssToStr,isMultiDayRange,htmlEscape,compareByFieldSpecs,applyStyle,FgEventRenderer,buildSegCompareObj,FillRenderer,memoize,memoizeRendering,createDuration,wholeDivideDurations,findElements,PositionCache,startOfDay,asRoughMs,formatIsoTimeString,addDurations,htmlToElement,createElement,multiplyDuration,DateComponent,hasBgRendering,Splitter,diffDays,buildGotoAnchorHtml,getAllDayHtml,ScrollComponent,matchCellWidths,uncompensateScroll,compensateScroll,subtractInnerElHeight,View,intersectRanges,Slicer,DayHeader,DaySeries,DayTable,createPlugin}from'@fullcalendar/core';import{DayBgRow,DayGrid,SimpleDayGrid}from'@fullcalendar/daygrid';var extendStatics=function(d,b){extendStatics=Object.setPrototypeOf||({__proto__:[]}instanceof Array&&function(d,b){d.__proto__=b;})||function(d,b){for(var p in b)if(b.hasOwnProperty(p))d[p]=b[p];};return extendStatics(d,b);};function __extends(d,b){extendStatics(d,b);function __(){this.constructor=d;}
d.prototype=b===null?Object.create(b):(__.prototype=b.prototype,new __());}
var __assign=function(){__assign=Object.assign||function __assign(t){for(var s,i=1,n=arguments.length;i<n;i++){s=arguments[i];for(var p in s)if(Object.prototype.hasOwnProperty.call(s,p))t[p]=s[p];}
return t;};return __assign.apply(this,arguments);};var TimeGridEventRenderer=(function(_super){__extends(TimeGridEventRenderer,_super);function TimeGridEventRenderer(timeGrid){var _this=_super.call(this)||this;_this.timeGrid=timeGrid;return _this;}
TimeGridEventRenderer.prototype.renderSegs=function(context,segs,mirrorInfo){_super.prototype.renderSegs.call(this,context,segs,mirrorInfo);this.fullTimeFormat=createFormatter({hour:'numeric',minute:'2-digit',separator:this.context.options.defaultRangeSeparator});};TimeGridEventRenderer.prototype.attachSegs=function(segs,mirrorInfo){var segsByCol=this.timeGrid.groupSegsByCol(segs);for(var col=0;col<segsByCol.length;col++){segsByCol[col]=this.sortEventSegs(segsByCol[col]);}
this.segsByCol=segsByCol;this.timeGrid.attachSegsByCol(segsByCol,this.timeGrid.fgContainerEls);};TimeGridEventRenderer.prototype.detachSegs=function(segs){segs.forEach(function(seg){removeElement(seg.el);});this.segsByCol=null;};TimeGridEventRenderer.prototype.computeSegSizes=function(allSegs){var _a=this,timeGrid=_a.timeGrid,segsByCol=_a.segsByCol;var colCnt=timeGrid.colCnt;timeGrid.computeSegVerticals(allSegs);if(segsByCol){for(var col=0;col<colCnt;col++){this.computeSegHorizontals(segsByCol[col]);}}};TimeGridEventRenderer.prototype.assignSegSizes=function(allSegs){var _a=this,timeGrid=_a.timeGrid,segsByCol=_a.segsByCol;var colCnt=timeGrid.colCnt;timeGrid.assignSegVerticals(allSegs);if(segsByCol){for(var col=0;col<colCnt;col++){this.assignSegCss(segsByCol[col]);}}};TimeGridEventRenderer.prototype.computeEventTimeFormat=function(){return{hour:'numeric',minute:'2-digit',meridiem:false};};TimeGridEventRenderer.prototype.computeDisplayEventEnd=function(){return true;};TimeGridEventRenderer.prototype.renderSegHtml=function(seg,mirrorInfo){var eventRange=seg.eventRange;var eventDef=eventRange.def;var eventUi=eventRange.ui;var allDay=eventDef.allDay;var isDraggable=computeEventDraggable(this.context,eventDef,eventUi);var isResizableFromStart=seg.isStart&&computeEventStartResizable(this.context,eventDef,eventUi);var isResizableFromEnd=seg.isEnd&&computeEventEndResizable(this.context,eventDef,eventUi);var classes=this.getSegClasses(seg,isDraggable,isResizableFromStart||isResizableFromEnd,mirrorInfo);var skinCss=cssToStr(this.getSkinCss(eventUi));var timeText;var fullTimeText;var startTimeText;classes.unshift('fc-time-grid-event');if(isMultiDayRange(eventRange.range)){if(seg.isStart||seg.isEnd){var unzonedStart=seg.start;var unzonedEnd=seg.end;timeText=this._getTimeText(unzonedStart,unzonedEnd,allDay);fullTimeText=this._getTimeText(unzonedStart,unzonedEnd,allDay,this.fullTimeFormat);startTimeText=this._getTimeText(unzonedStart,unzonedEnd,allDay,null,false);}}
else{timeText=this.getTimeText(eventRange);fullTimeText=this.getTimeText(eventRange,this.fullTimeFormat);startTimeText=this.getTimeText(eventRange,null,false);}
return'<a class="'+classes.join(' ')+'"'+
(eventDef.url?' href="'+htmlEscape(eventDef.url)+'"':'')+
(skinCss?' style="'+skinCss+'"':'')+'>'+'<div class="fc-content">'+
(timeText?'<div class="fc-time"'+' data-start="'+htmlEscape(startTimeText)+'"'+' data-full="'+htmlEscape(fullTimeText)+'"'+'>'+'<span>'+htmlEscape(timeText)+'</span>'+'</div>':'')+
(eventDef.title?'<div class="fc-title">'+
htmlEscape(eventDef.title)+'</div>':'')+'</div>'+
(isResizableFromEnd?'<div class="fc-resizer fc-end-resizer"></div>':'')+'</a>';};TimeGridEventRenderer.prototype.computeSegHorizontals=function(segs){var levels;var level0;var i;levels=buildSlotSegLevels(segs);computeForwardSlotSegs(levels);if((level0=levels[0])){for(i=0;i<level0.length;i++){computeSlotSegPressures(level0[i]);}
for(i=0;i<level0.length;i++){this.computeSegForwardBack(level0[i],0,0);}}};TimeGridEventRenderer.prototype.computeSegForwardBack=function(seg,seriesBackwardPressure,seriesBackwardCoord){var forwardSegs=seg.forwardSegs;var i;if(seg.forwardCoord===undefined){if(!forwardSegs.length){seg.forwardCoord=1;}
else{this.sortForwardSegs(forwardSegs);this.computeSegForwardBack(forwardSegs[0],seriesBackwardPressure+1,seriesBackwardCoord);seg.forwardCoord=forwardSegs[0].backwardCoord;}
seg.backwardCoord=seg.forwardCoord-
(seg.forwardCoord-seriesBackwardCoord)/(seriesBackwardPressure+1);for(i=0;i<forwardSegs.length;i++){this.computeSegForwardBack(forwardSegs[i],0,seg.forwardCoord);}}};TimeGridEventRenderer.prototype.sortForwardSegs=function(forwardSegs){var objs=forwardSegs.map(buildTimeGridSegCompareObj);var specs=[{field:'forwardPressure',order:-1},{field:'backwardCoord',order:1}].concat(this.context.eventOrderSpecs);objs.sort(function(obj0,obj1){return compareByFieldSpecs(obj0,obj1,specs);});return objs.map(function(c){return c._seg;});};TimeGridEventRenderer.prototype.assignSegCss=function(segs){for(var _i=0,segs_1=segs;_i<segs_1.length;_i++){var seg=segs_1[_i];applyStyle(seg.el,this.generateSegCss(seg));if(seg.level>0){seg.el.classList.add('fc-time-grid-event-inset');}
if(seg.eventRange.def.title&&seg.bottom-seg.top<30){seg.el.classList.add('fc-short');}}};TimeGridEventRenderer.prototype.generateSegCss=function(seg){var shouldOverlap=this.context.options.slotEventOverlap;var backwardCoord=seg.backwardCoord;var forwardCoord=seg.forwardCoord;var props=this.timeGrid.generateSegVerticalCss(seg);var isRtl=this.context.isRtl;var left;var right;if(shouldOverlap){forwardCoord=Math.min(1,backwardCoord+(forwardCoord-backwardCoord)*2);}
if(isRtl){left=1-forwardCoord;right=backwardCoord;}
else{left=backwardCoord;right=1-forwardCoord;}
props.zIndex=seg.level+1;props.left=left*100+'%';props.right=right*100+'%';if(shouldOverlap&&seg.forwardPressure){props[isRtl?'marginLeft':'marginRight']=10*2;}
return props;};return TimeGridEventRenderer;}(FgEventRenderer));function buildSlotSegLevels(segs){var levels=[];var i;var seg;var j;for(i=0;i<segs.length;i++){seg=segs[i];for(j=0;j<levels.length;j++){if(!computeSlotSegCollisions(seg,levels[j]).length){break;}}
seg.level=j;(levels[j]||(levels[j]=[])).push(seg);}
return levels;}
function computeForwardSlotSegs(levels){var i;var level;var j;var seg;var k;for(i=0;i<levels.length;i++){level=levels[i];for(j=0;j<level.length;j++){seg=level[j];seg.forwardSegs=[];for(k=i+1;k<levels.length;k++){computeSlotSegCollisions(seg,levels[k],seg.forwardSegs);}}}}
function computeSlotSegPressures(seg){var forwardSegs=seg.forwardSegs;var forwardPressure=0;var i;var forwardSeg;if(seg.forwardPressure===undefined){for(i=0;i<forwardSegs.length;i++){forwardSeg=forwardSegs[i];computeSlotSegPressures(forwardSeg);forwardPressure=Math.max(forwardPressure,1+forwardSeg.forwardPressure);}
seg.forwardPressure=forwardPressure;}}
function computeSlotSegCollisions(seg,otherSegs,results){if(results===void 0){results=[];}
for(var i=0;i<otherSegs.length;i++){if(isSlotSegCollision(seg,otherSegs[i])){results.push(otherSegs[i]);}}
return results;}
function isSlotSegCollision(seg1,seg2){return seg1.bottom>seg2.top&&seg1.top<seg2.bottom;}
function buildTimeGridSegCompareObj(seg){var obj=buildSegCompareObj(seg);obj.forwardPressure=seg.forwardPressure;obj.backwardCoord=seg.backwardCoord;return obj;}
var TimeGridMirrorRenderer=(function(_super){__extends(TimeGridMirrorRenderer,_super);function TimeGridMirrorRenderer(){return _super!==null&&_super.apply(this,arguments)||this;}
TimeGridMirrorRenderer.prototype.attachSegs=function(segs,mirrorInfo){this.segsByCol=this.timeGrid.groupSegsByCol(segs);this.timeGrid.attachSegsByCol(this.segsByCol,this.timeGrid.mirrorContainerEls);this.sourceSeg=mirrorInfo.sourceSeg;};TimeGridMirrorRenderer.prototype.generateSegCss=function(seg){var props=_super.prototype.generateSegCss.call(this,seg);var sourceSeg=this.sourceSeg;if(sourceSeg&&sourceSeg.col===seg.col){var sourceSegProps=_super.prototype.generateSegCss.call(this,sourceSeg);props.left=sourceSegProps.left;props.right=sourceSegProps.right;props.marginLeft=sourceSegProps.marginLeft;props.marginRight=sourceSegProps.marginRight;}
return props;};return TimeGridMirrorRenderer;}(TimeGridEventRenderer));var TimeGridFillRenderer=(function(_super){__extends(TimeGridFillRenderer,_super);function TimeGridFillRenderer(timeGrid){var _this=_super.call(this)||this;_this.timeGrid=timeGrid;return _this;}
TimeGridFillRenderer.prototype.attachSegs=function(type,segs){var timeGrid=this.timeGrid;var containerEls;if(type==='bgEvent'){containerEls=timeGrid.bgContainerEls;}
else if(type==='businessHours'){containerEls=timeGrid.businessContainerEls;}
else if(type==='highlight'){containerEls=timeGrid.highlightContainerEls;}
timeGrid.attachSegsByCol(timeGrid.groupSegsByCol(segs),containerEls);return segs.map(function(seg){return seg.el;});};TimeGridFillRenderer.prototype.computeSegSizes=function(segs){this.timeGrid.computeSegVerticals(segs);};TimeGridFillRenderer.prototype.assignSegSizes=function(segs){this.timeGrid.assignSegVerticals(segs);};return TimeGridFillRenderer;}(FillRenderer));var AGENDA_STOCK_SUB_DURATIONS=[{hours:1},{minutes:30},{minutes:15},{seconds:30},{seconds:15}];var TimeGrid=(function(_super){__extends(TimeGrid,_super);function TimeGrid(el,renderProps){var _this=_super.call(this,el)||this;_this.isSlatSizesDirty=false;_this.isColSizesDirty=false;_this.processOptions=memoize(_this._processOptions);_this.renderSkeleton=memoizeRendering(_this._renderSkeleton);_this.renderSlats=memoizeRendering(_this._renderSlats,null,[_this.renderSkeleton]);_this.renderColumns=memoizeRendering(_this._renderColumns,_this._unrenderColumns,[_this.renderSkeleton]);_this.renderProps=renderProps;var renderColumns=_this.renderColumns;var eventRenderer=_this.eventRenderer=new TimeGridEventRenderer(_this);var fillRenderer=_this.fillRenderer=new TimeGridFillRenderer(_this);_this.mirrorRenderer=new TimeGridMirrorRenderer(_this);_this.renderBusinessHours=memoizeRendering(fillRenderer.renderSegs.bind(fillRenderer,'businessHours'),fillRenderer.unrender.bind(fillRenderer,'businessHours'),[renderColumns]);_this.renderDateSelection=memoizeRendering(_this._renderDateSelection,_this._unrenderDateSelection,[renderColumns]);_this.renderFgEvents=memoizeRendering(eventRenderer.renderSegs.bind(eventRenderer),eventRenderer.unrender.bind(eventRenderer),[renderColumns]);_this.renderBgEvents=memoizeRendering(fillRenderer.renderSegs.bind(fillRenderer,'bgEvent'),fillRenderer.unrender.bind(fillRenderer,'bgEvent'),[renderColumns]);_this.renderEventSelection=memoizeRendering(eventRenderer.selectByInstanceId.bind(eventRenderer),eventRenderer.unselectByInstanceId.bind(eventRenderer),[_this.renderFgEvents]);_this.renderEventDrag=memoizeRendering(_this._renderEventDrag,_this._unrenderEventDrag,[renderColumns]);_this.renderEventResize=memoizeRendering(_this._renderEventResize,_this._unrenderEventResize,[renderColumns]);return _this;}
TimeGrid.prototype._processOptions=function(options){var slotDuration=options.slotDuration,snapDuration=options.snapDuration;var snapsPerSlot;var input;slotDuration=createDuration(slotDuration);snapDuration=snapDuration?createDuration(snapDuration):slotDuration;snapsPerSlot=wholeDivideDurations(slotDuration,snapDuration);if(snapsPerSlot===null){snapDuration=slotDuration;snapsPerSlot=1;}
this.slotDuration=slotDuration;this.snapDuration=snapDuration;this.snapsPerSlot=snapsPerSlot;input=options.slotLabelFormat;if(Array.isArray(input)){input=input[input.length-1];}
this.labelFormat=createFormatter(input||{hour:'numeric',minute:'2-digit',omitZeroMinute:true,meridiem:'short'});input=options.slotLabelInterval;this.labelInterval=input?createDuration(input):this.computeLabelInterval(slotDuration);};TimeGrid.prototype.computeLabelInterval=function(slotDuration){var i;var labelInterval;var slotsPerLabel;for(i=AGENDA_STOCK_SUB_DURATIONS.length-1;i>=0;i--){labelInterval=createDuration(AGENDA_STOCK_SUB_DURATIONS[i]);slotsPerLabel=wholeDivideDurations(labelInterval,slotDuration);if(slotsPerLabel!==null&&slotsPerLabel>1){return labelInterval;}}
return slotDuration;};TimeGrid.prototype.render=function(props,context){this.processOptions(context.options);var cells=props.cells;this.colCnt=cells.length;this.renderSkeleton(context.theme);this.renderSlats(props.dateProfile);this.renderColumns(props.cells,props.dateProfile);this.renderBusinessHours(context,props.businessHourSegs);this.renderDateSelection(props.dateSelectionSegs);this.renderFgEvents(context,props.fgEventSegs);this.renderBgEvents(context,props.bgEventSegs);this.renderEventSelection(props.eventSelection);this.renderEventDrag(props.eventDrag);this.renderEventResize(props.eventResize);};TimeGrid.prototype.destroy=function(){_super.prototype.destroy.call(this);this.renderSlats.unrender();this.renderColumns.unrender();this.renderSkeleton.unrender();};TimeGrid.prototype.updateSize=function(isResize){var _a=this,fillRenderer=_a.fillRenderer,eventRenderer=_a.eventRenderer,mirrorRenderer=_a.mirrorRenderer;if(isResize||this.isSlatSizesDirty){this.buildSlatPositions();this.isSlatSizesDirty=false;}
if(isResize||this.isColSizesDirty){this.buildColPositions();this.isColSizesDirty=false;}
fillRenderer.computeSizes(isResize);eventRenderer.computeSizes(isResize);mirrorRenderer.computeSizes(isResize);fillRenderer.assignSizes(isResize);eventRenderer.assignSizes(isResize);mirrorRenderer.assignSizes(isResize);};TimeGrid.prototype._renderSkeleton=function(theme){var el=this.el;el.innerHTML='<div class="fc-bg"></div>'+'<div class="fc-slats"></div>'+'<hr class="fc-divider '+theme.getClass('widgetHeader')+'" style="display:none" />';this.rootBgContainerEl=el.querySelector('.fc-bg');this.slatContainerEl=el.querySelector('.fc-slats');this.bottomRuleEl=el.querySelector('.fc-divider');};TimeGrid.prototype._renderSlats=function(dateProfile){var theme=this.context.theme;this.slatContainerEl.innerHTML='<table class="'+theme.getClass('tableGrid')+'">'+
this.renderSlatRowHtml(dateProfile)+'</table>';this.slatEls=findElements(this.slatContainerEl,'tr');this.slatPositions=new PositionCache(this.el,this.slatEls,false,true);this.isSlatSizesDirty=true;};TimeGrid.prototype.renderSlatRowHtml=function(dateProfile){var _a=this.context,dateEnv=_a.dateEnv,theme=_a.theme,isRtl=_a.isRtl;var html='';var dayStart=startOfDay(dateProfile.renderRange.start);var slotTime=dateProfile.minTime;var slotIterator=createDuration(0);var slotDate;var isLabeled;var axisHtml;while(asRoughMs(slotTime)<asRoughMs(dateProfile.maxTime)){slotDate=dateEnv.add(dayStart,slotTime);isLabeled=wholeDivideDurations(slotIterator,this.labelInterval)!==null;axisHtml='<td class="fc-axis fc-time '+theme.getClass('widgetContent')+'">'+
(isLabeled?'<span>'+
htmlEscape(dateEnv.format(slotDate,this.labelFormat))+'</span>':'')+'</td>';html+='<tr data-time="'+formatIsoTimeString(slotDate)+'"'+
(isLabeled?'':' class="fc-minor"')+'>'+
(!isRtl?axisHtml:'')+'<td class="'+theme.getClass('widgetContent')+'"></td>'+
(isRtl?axisHtml:'')+'</tr>';slotTime=addDurations(slotTime,this.slotDuration);slotIterator=addDurations(slotIterator,this.slotDuration);}
return html;};TimeGrid.prototype._renderColumns=function(cells,dateProfile){var _a=this.context,calendar=_a.calendar,view=_a.view,isRtl=_a.isRtl,theme=_a.theme,dateEnv=_a.dateEnv;var bgRow=new DayBgRow(this.context);this.rootBgContainerEl.innerHTML='<table class="'+theme.getClass('tableGrid')+'">'+
bgRow.renderHtml({cells:cells,dateProfile:dateProfile,renderIntroHtml:this.renderProps.renderBgIntroHtml})+'</table>';this.colEls=findElements(this.el,'.fc-day, .fc-disabled-day');for(var col=0;col<this.colCnt;col++){calendar.publiclyTrigger('dayRender',[{date:dateEnv.toDate(cells[col].date),el:this.colEls[col],view:view}]);}
if(isRtl){this.colEls.reverse();}
this.colPositions=new PositionCache(this.el,this.colEls,true,false);this.renderContentSkeleton();this.isColSizesDirty=true;};TimeGrid.prototype._unrenderColumns=function(){this.unrenderContentSkeleton();};TimeGrid.prototype.renderContentSkeleton=function(){var isRtl=this.context.isRtl;var parts=[];var skeletonEl;parts.push(this.renderProps.renderIntroHtml());for(var i=0;i<this.colCnt;i++){parts.push('<td>'+'<div class="fc-content-col">'+'<div class="fc-event-container fc-mirror-container"></div>'+'<div class="fc-event-container"></div>'+'<div class="fc-highlight-container"></div>'+'<div class="fc-bgevent-container"></div>'+'<div class="fc-business-container"></div>'+'</div>'+'</td>');}
if(isRtl){parts.reverse();}
skeletonEl=this.contentSkeletonEl=htmlToElement('<div class="fc-content-skeleton">'+'<table>'+'<tr>'+parts.join('')+'</tr>'+'</table>'+'</div>');this.colContainerEls=findElements(skeletonEl,'.fc-content-col');this.mirrorContainerEls=findElements(skeletonEl,'.fc-mirror-container');this.fgContainerEls=findElements(skeletonEl,'.fc-event-container:not(.fc-mirror-container)');this.bgContainerEls=findElements(skeletonEl,'.fc-bgevent-container');this.highlightContainerEls=findElements(skeletonEl,'.fc-highlight-container');this.businessContainerEls=findElements(skeletonEl,'.fc-business-container');if(isRtl){this.colContainerEls.reverse();this.mirrorContainerEls.reverse();this.fgContainerEls.reverse();this.bgContainerEls.reverse();this.highlightContainerEls.reverse();this.businessContainerEls.reverse();}
this.el.appendChild(skeletonEl);};TimeGrid.prototype.unrenderContentSkeleton=function(){removeElement(this.contentSkeletonEl);};TimeGrid.prototype.groupSegsByCol=function(segs){var segsByCol=[];var i;for(i=0;i<this.colCnt;i++){segsByCol.push([]);}
for(i=0;i<segs.length;i++){segsByCol[segs[i].col].push(segs[i]);}
return segsByCol;};TimeGrid.prototype.attachSegsByCol=function(segsByCol,containerEls){var col;var segs;var i;for(col=0;col<this.colCnt;col++){segs=segsByCol[col];for(i=0;i<segs.length;i++){containerEls[col].appendChild(segs[i].el);}}};TimeGrid.prototype.getNowIndicatorUnit=function(){return'minute';};TimeGrid.prototype.renderNowIndicator=function(segs,date){if(!this.colContainerEls){return;}
var top=this.computeDateTop(date);var nodes=[];var i;for(i=0;i<segs.length;i++){var lineEl=createElement('div',{className:'fc-now-indicator fc-now-indicator-line'});lineEl.style.top=top+'px';this.colContainerEls[segs[i].col].appendChild(lineEl);nodes.push(lineEl);}
if(segs.length>0){var arrowEl=createElement('div',{className:'fc-now-indicator fc-now-indicator-arrow'});arrowEl.style.top=top+'px';this.contentSkeletonEl.appendChild(arrowEl);nodes.push(arrowEl);}
this.nowIndicatorEls=nodes;};TimeGrid.prototype.unrenderNowIndicator=function(){if(this.nowIndicatorEls){this.nowIndicatorEls.forEach(removeElement);this.nowIndicatorEls=null;}};TimeGrid.prototype.getTotalSlatHeight=function(){return this.slatContainerEl.getBoundingClientRect().height;};TimeGrid.prototype.computeDateTop=function(when,startOfDayDate){if(!startOfDayDate){startOfDayDate=startOfDay(when);}
return this.computeTimeTop(createDuration(when.valueOf()-startOfDayDate.valueOf()));};TimeGrid.prototype.computeTimeTop=function(duration){var len=this.slatEls.length;var dateProfile=this.props.dateProfile;var slatCoverage=(duration.milliseconds-asRoughMs(dateProfile.minTime))/asRoughMs(this.slotDuration);var slatIndex;var slatRemainder;slatCoverage=Math.max(0,slatCoverage);slatCoverage=Math.min(len,slatCoverage);slatIndex=Math.floor(slatCoverage);slatIndex=Math.min(slatIndex,len-1);slatRemainder=slatCoverage-slatIndex;return this.slatPositions.tops[slatIndex]+
this.slatPositions.getHeight(slatIndex)*slatRemainder;};TimeGrid.prototype.computeSegVerticals=function(segs){var options=this.context.options;var eventMinHeight=options.timeGridEventMinHeight;var i;var seg;var dayDate;for(i=0;i<segs.length;i++){seg=segs[i];dayDate=this.props.cells[seg.col].date;seg.top=this.computeDateTop(seg.start,dayDate);seg.bottom=Math.max(seg.top+eventMinHeight,this.computeDateTop(seg.end,dayDate));}};TimeGrid.prototype.assignSegVerticals=function(segs){var i;var seg;for(i=0;i<segs.length;i++){seg=segs[i];applyStyle(seg.el,this.generateSegVerticalCss(seg));}};TimeGrid.prototype.generateSegVerticalCss=function(seg){return{top:seg.top,bottom:-seg.bottom};};TimeGrid.prototype.buildPositionCaches=function(){this.buildColPositions();this.buildSlatPositions();};TimeGrid.prototype.buildColPositions=function(){this.colPositions.build();};TimeGrid.prototype.buildSlatPositions=function(){this.slatPositions.build();};TimeGrid.prototype.positionToHit=function(positionLeft,positionTop){var dateEnv=this.context.dateEnv;var _a=this,snapsPerSlot=_a.snapsPerSlot,slatPositions=_a.slatPositions,colPositions=_a.colPositions;var colIndex=colPositions.leftToIndex(positionLeft);var slatIndex=slatPositions.topToIndex(positionTop);if(colIndex!=null&&slatIndex!=null){var slatTop=slatPositions.tops[slatIndex];var slatHeight=slatPositions.getHeight(slatIndex);var partial=(positionTop-slatTop)/slatHeight;var localSnapIndex=Math.floor(partial*snapsPerSlot);var snapIndex=slatIndex*snapsPerSlot+localSnapIndex;var dayDate=this.props.cells[colIndex].date;var time=addDurations(this.props.dateProfile.minTime,multiplyDuration(this.snapDuration,snapIndex));var start=dateEnv.add(dayDate,time);var end=dateEnv.add(start,this.snapDuration);return{col:colIndex,dateSpan:{range:{start:start,end:end},allDay:false},dayEl:this.colEls[colIndex],relativeRect:{left:colPositions.lefts[colIndex],right:colPositions.rights[colIndex],top:slatTop,bottom:slatTop+slatHeight}};}};TimeGrid.prototype._renderEventDrag=function(state){if(state){this.eventRenderer.hideByHash(state.affectedInstances);if(state.isEvent){this.mirrorRenderer.renderSegs(this.context,state.segs,{isDragging:true,sourceSeg:state.sourceSeg});}
else{this.fillRenderer.renderSegs('highlight',this.context,state.segs);}}};TimeGrid.prototype._unrenderEventDrag=function(state){if(state){this.eventRenderer.showByHash(state.affectedInstances);if(state.isEvent){this.mirrorRenderer.unrender(this.context,state.segs,{isDragging:true,sourceSeg:state.sourceSeg});}
else{this.fillRenderer.unrender('highlight',this.context);}}};TimeGrid.prototype._renderEventResize=function(state){if(state){this.eventRenderer.hideByHash(state.affectedInstances);this.mirrorRenderer.renderSegs(this.context,state.segs,{isResizing:true,sourceSeg:state.sourceSeg});}};TimeGrid.prototype._unrenderEventResize=function(state){if(state){this.eventRenderer.showByHash(state.affectedInstances);this.mirrorRenderer.unrender(this.context,state.segs,{isResizing:true,sourceSeg:state.sourceSeg});}};TimeGrid.prototype._renderDateSelection=function(segs){if(segs){if(this.context.options.selectMirror){this.mirrorRenderer.renderSegs(this.context,segs,{isSelecting:true});}
else{this.fillRenderer.renderSegs('highlight',this.context,segs);}}};TimeGrid.prototype._unrenderDateSelection=function(segs){if(segs){if(this.context.options.selectMirror){this.mirrorRenderer.unrender(this.context,segs,{isSelecting:true});}
else{this.fillRenderer.unrender('highlight',this.context);}}};return TimeGrid;}(DateComponent));var AllDaySplitter=(function(_super){__extends(AllDaySplitter,_super);function AllDaySplitter(){return _super!==null&&_super.apply(this,arguments)||this;}
AllDaySplitter.prototype.getKeyInfo=function(){return{allDay:{},timed:{}};};AllDaySplitter.prototype.getKeysForDateSpan=function(dateSpan){if(dateSpan.allDay){return['allDay'];}
else{return['timed'];}};AllDaySplitter.prototype.getKeysForEventDef=function(eventDef){if(!eventDef.allDay){return['timed'];}
else if(hasBgRendering(eventDef)){return['timed','allDay'];}
else{return['allDay'];}};return AllDaySplitter;}(Splitter));var TIMEGRID_ALL_DAY_EVENT_LIMIT=5;var WEEK_HEADER_FORMAT=createFormatter({week:'short'});var AbstractTimeGridView=(function(_super){__extends(AbstractTimeGridView,_super);function AbstractTimeGridView(){var _this=_super!==null&&_super.apply(this,arguments)||this;_this.splitter=new AllDaySplitter();_this.renderSkeleton=memoizeRendering(_this._renderSkeleton,_this._unrenderSkeleton);_this.renderHeadIntroHtml=function(){var _a=_this.context,theme=_a.theme,dateEnv=_a.dateEnv,options=_a.options;var range=_this.props.dateProfile.renderRange;var dayCnt=diffDays(range.start,range.end);var weekText;if(options.weekNumbers){weekText=dateEnv.format(range.start,WEEK_HEADER_FORMAT);return''+'<th class="fc-axis fc-week-number '+theme.getClass('widgetHeader')+'" '+_this.axisStyleAttr()+'>'+
buildGotoAnchorHtml(options,dateEnv,{date:range.start,type:'week',forceOff:dayCnt>1},htmlEscape(weekText))+'</th>';}
else{return'<th class="fc-axis '+theme.getClass('widgetHeader')+'" '+_this.axisStyleAttr()+'></th>';}};_this.renderTimeGridBgIntroHtml=function(){var theme=_this.context.theme;return'<td class="fc-axis '+theme.getClass('widgetContent')+'" '+_this.axisStyleAttr()+'></td>';};_this.renderTimeGridIntroHtml=function(){return'<td class="fc-axis" '+_this.axisStyleAttr()+'></td>';};_this.renderDayGridBgIntroHtml=function(){var _a=_this.context,theme=_a.theme,options=_a.options;return''+'<td class="fc-axis '+theme.getClass('widgetContent')+'" '+_this.axisStyleAttr()+'>'+'<span>'+
getAllDayHtml(options)+'</span>'+'</td>';};_this.renderDayGridIntroHtml=function(){return'<td class="fc-axis" '+_this.axisStyleAttr()+'></td>';};return _this;}
AbstractTimeGridView.prototype.render=function(props,context){_super.prototype.render.call(this,props,context);this.renderSkeleton(context);};AbstractTimeGridView.prototype.destroy=function(){_super.prototype.destroy.call(this);this.renderSkeleton.unrender();};AbstractTimeGridView.prototype._renderSkeleton=function(context){this.el.classList.add('fc-timeGrid-view');this.el.innerHTML=this.renderSkeletonHtml();this.scroller=new ScrollComponent('hidden','auto');var timeGridWrapEl=this.scroller.el;this.el.querySelector('.fc-body > tr > td').appendChild(timeGridWrapEl);timeGridWrapEl.classList.add('fc-time-grid-container');var timeGridEl=createElement('div',{className:'fc-time-grid'});timeGridWrapEl.appendChild(timeGridEl);this.timeGrid=new TimeGrid(timeGridEl,{renderBgIntroHtml:this.renderTimeGridBgIntroHtml,renderIntroHtml:this.renderTimeGridIntroHtml});if(context.options.allDaySlot){this.dayGrid=new DayGrid(this.el.querySelector('.fc-day-grid'),{renderNumberIntroHtml:this.renderDayGridIntroHtml,renderBgIntroHtml:this.renderDayGridBgIntroHtml,renderIntroHtml:this.renderDayGridIntroHtml,colWeekNumbersVisible:false,cellWeekNumbersVisible:false});var dividerEl=this.el.querySelector('.fc-divider');this.dayGrid.bottomCoordPadding=dividerEl.getBoundingClientRect().height;}};AbstractTimeGridView.prototype._unrenderSkeleton=function(){this.el.classList.remove('fc-timeGrid-view');this.timeGrid.destroy();if(this.dayGrid){this.dayGrid.destroy();}
this.scroller.destroy();};AbstractTimeGridView.prototype.renderSkeletonHtml=function(){var _a=this.context,theme=_a.theme,options=_a.options;return''+'<table class="'+theme.getClass('tableGrid')+'">'+
(options.columnHeader?'<thead class="fc-head">'+'<tr>'+'<td class="fc-head-container '+theme.getClass('widgetHeader')+'">&nbsp;</td>'+'</tr>'+'</thead>':'')+'<tbody class="fc-body">'+'<tr>'+'<td class="'+theme.getClass('widgetContent')+'">'+
(options.allDaySlot?'<div class="fc-day-grid"></div>'+'<hr class="fc-divider '+theme.getClass('widgetHeader')+'" />':'')+'</td>'+'</tr>'+'</tbody>'+'</table>';};AbstractTimeGridView.prototype.getNowIndicatorUnit=function(){return this.timeGrid.getNowIndicatorUnit();};AbstractTimeGridView.prototype.unrenderNowIndicator=function(){this.timeGrid.unrenderNowIndicator();};AbstractTimeGridView.prototype.updateSize=function(isResize,viewHeight,isAuto){_super.prototype.updateSize.call(this,isResize,viewHeight,isAuto);this.timeGrid.updateSize(isResize);if(this.dayGrid){this.dayGrid.updateSize(isResize);}};AbstractTimeGridView.prototype.updateBaseSize=function(isResize,viewHeight,isAuto){var _this=this;var eventLimit;var scrollerHeight;var scrollbarWidths;this.axisWidth=matchCellWidths(findElements(this.el,'.fc-axis'));if(!this.timeGrid.colEls){if(!isAuto){scrollerHeight=this.computeScrollerHeight(viewHeight);this.scroller.setHeight(scrollerHeight);}
return;}
var noScrollRowEls=findElements(this.el,'.fc-row').filter(function(node){return!_this.scroller.el.contains(node);});this.timeGrid.bottomRuleEl.style.display='none';this.scroller.clear();noScrollRowEls.forEach(uncompensateScroll);if(this.dayGrid){this.dayGrid.removeSegPopover();eventLimit=this.context.options.eventLimit;if(eventLimit&&typeof eventLimit!=='number'){eventLimit=TIMEGRID_ALL_DAY_EVENT_LIMIT;}
if(eventLimit){this.dayGrid.limitRows(eventLimit);}}
if(!isAuto){scrollerHeight=this.computeScrollerHeight(viewHeight);this.scroller.setHeight(scrollerHeight);scrollbarWidths=this.scroller.getScrollbarWidths();if(scrollbarWidths.left||scrollbarWidths.right){noScrollRowEls.forEach(function(rowEl){compensateScroll(rowEl,scrollbarWidths);});scrollerHeight=this.computeScrollerHeight(viewHeight);this.scroller.setHeight(scrollerHeight);}
this.scroller.lockOverflow(scrollbarWidths);if(this.timeGrid.getTotalSlatHeight()<scrollerHeight){this.timeGrid.bottomRuleEl.style.display='';}}};AbstractTimeGridView.prototype.computeScrollerHeight=function(viewHeight){return viewHeight-
subtractInnerElHeight(this.el,this.scroller.el);};AbstractTimeGridView.prototype.computeDateScroll=function(duration){var top=this.timeGrid.computeTimeTop(duration);top=Math.ceil(top);if(top){top++;}
return{top:top};};AbstractTimeGridView.prototype.queryDateScroll=function(){return{top:this.scroller.getScrollTop()};};AbstractTimeGridView.prototype.applyDateScroll=function(scroll){if(scroll.top!==undefined){this.scroller.setScrollTop(scroll.top);}};AbstractTimeGridView.prototype.axisStyleAttr=function(){if(this.axisWidth!=null){return'style="width:'+this.axisWidth+'px"';}
return'';};return AbstractTimeGridView;}(View));AbstractTimeGridView.prototype.usesMinMaxTime=true;var SimpleTimeGrid=(function(_super){__extends(SimpleTimeGrid,_super);function SimpleTimeGrid(timeGrid){var _this=_super.call(this,timeGrid.el)||this;_this.buildDayRanges=memoize(buildDayRanges);_this.slicer=new TimeGridSlicer();_this.timeGrid=timeGrid;return _this;}
SimpleTimeGrid.prototype.firstContext=function(context){context.calendar.registerInteractiveComponent(this,{el:this.timeGrid.el});};SimpleTimeGrid.prototype.destroy=function(){_super.prototype.destroy.call(this);this.context.calendar.unregisterInteractiveComponent(this);};SimpleTimeGrid.prototype.render=function(props,context){var dateEnv=this.context.dateEnv;var dateProfile=props.dateProfile,dayTable=props.dayTable;var dayRanges=this.dayRanges=this.buildDayRanges(dayTable,dateProfile,dateEnv);this.timeGrid.receiveProps(__assign({},this.slicer.sliceProps(props,dateProfile,null,context.calendar,this.timeGrid,dayRanges),{dateProfile:dateProfile,cells:dayTable.cells[0]}),context);};SimpleTimeGrid.prototype.renderNowIndicator=function(date){this.timeGrid.renderNowIndicator(this.slicer.sliceNowDate(date,this.timeGrid,this.dayRanges),date);};SimpleTimeGrid.prototype.buildPositionCaches=function(){this.timeGrid.buildPositionCaches();};SimpleTimeGrid.prototype.queryHit=function(positionLeft,positionTop){var rawHit=this.timeGrid.positionToHit(positionLeft,positionTop);if(rawHit){return{component:this.timeGrid,dateSpan:rawHit.dateSpan,dayEl:rawHit.dayEl,rect:{left:rawHit.relativeRect.left,right:rawHit.relativeRect.right,top:rawHit.relativeRect.top,bottom:rawHit.relativeRect.bottom},layer:0};}};return SimpleTimeGrid;}(DateComponent));function buildDayRanges(dayTable,dateProfile,dateEnv){var ranges=[];for(var _i=0,_a=dayTable.headerDates;_i<_a.length;_i++){var date=_a[_i];ranges.push({start:dateEnv.add(date,dateProfile.minTime),end:dateEnv.add(date,dateProfile.maxTime)});}
return ranges;}
var TimeGridSlicer=(function(_super){__extends(TimeGridSlicer,_super);function TimeGridSlicer(){return _super!==null&&_super.apply(this,arguments)||this;}
TimeGridSlicer.prototype.sliceRange=function(range,dayRanges){var segs=[];for(var col=0;col<dayRanges.length;col++){var segRange=intersectRanges(range,dayRanges[col]);if(segRange){segs.push({start:segRange.start,end:segRange.end,isStart:segRange.start.valueOf()===range.start.valueOf(),isEnd:segRange.end.valueOf()===range.end.valueOf(),col:col});}}
return segs;};return TimeGridSlicer;}(Slicer));var TimeGridView=(function(_super){__extends(TimeGridView,_super);function TimeGridView(){var _this=_super!==null&&_super.apply(this,arguments)||this;_this.buildDayTable=memoize(buildDayTable);return _this;}
TimeGridView.prototype.render=function(props,context){_super.prototype.render.call(this,props,context);var _a=this.props,dateProfile=_a.dateProfile,dateProfileGenerator=_a.dateProfileGenerator;var nextDayThreshold=context.nextDayThreshold;var dayTable=this.buildDayTable(dateProfile,dateProfileGenerator);var splitProps=this.splitter.splitProps(props);if(this.header){this.header.receiveProps({dateProfile:dateProfile,dates:dayTable.headerDates,datesRepDistinctDays:true,renderIntroHtml:this.renderHeadIntroHtml},context);}
this.simpleTimeGrid.receiveProps(__assign({},splitProps['timed'],{dateProfile:dateProfile,dayTable:dayTable}),context);if(this.simpleDayGrid){this.simpleDayGrid.receiveProps(__assign({},splitProps['allDay'],{dateProfile:dateProfile,dayTable:dayTable,nextDayThreshold:nextDayThreshold,isRigid:false}),context);}
this.startNowIndicator(dateProfile,dateProfileGenerator);};TimeGridView.prototype._renderSkeleton=function(context){_super.prototype._renderSkeleton.call(this,context);if(context.options.columnHeader){this.header=new DayHeader(this.el.querySelector('.fc-head-container'));}
this.simpleTimeGrid=new SimpleTimeGrid(this.timeGrid);if(this.dayGrid){this.simpleDayGrid=new SimpleDayGrid(this.dayGrid);}};TimeGridView.prototype._unrenderSkeleton=function(){_super.prototype._unrenderSkeleton.call(this);if(this.header){this.header.destroy();}
this.simpleTimeGrid.destroy();if(this.simpleDayGrid){this.simpleDayGrid.destroy();}};TimeGridView.prototype.renderNowIndicator=function(date){this.simpleTimeGrid.renderNowIndicator(date);};return TimeGridView;}(AbstractTimeGridView));function buildDayTable(dateProfile,dateProfileGenerator){var daySeries=new DaySeries(dateProfile.renderRange,dateProfileGenerator);return new DayTable(daySeries,false);}
var main=createPlugin({defaultView:'timeGridWeek',views:{timeGrid:{class:TimeGridView,allDaySlot:true,slotDuration:'00:30:00',slotEventOverlap:true},timeGridDay:{type:'timeGrid',duration:{days:1}},timeGridWeek:{type:'timeGrid',duration:{weeks:1}}}});export default main;export{AbstractTimeGridView,TimeGrid,TimeGridSlicer,TimeGridView,buildDayRanges,buildDayTable};