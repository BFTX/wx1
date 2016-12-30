<?php
/*$str=<<<'E'
4e00	一	丁	丂	七	丄	丅	丆	万	丈	三	上	下	丌	不	与	丏
4e10	丐	丑	丒	专	且	丕	世	丗	丘	丙	业	丛	东	丝	丞	丢
4e20	丠	両	丢	丣	两	严	并	丧	丨	丩	个	丫	丬	中	丮	丯
4e30	丰	丱	串	丳	临	丵	丶	丷	丸	丹	为	主	丼	丽	举	丿
4e40	乀	乁	乂	乃	乄	久	乆	乇	么	义	乊	之	乌	乍	乎	乏
4e50	乐	乑	乒	乓	乔	乕	乖	乗	乘	乙	乚	乛	乜	九	乞	也
4e60	习	乡	乢	乣	乤	乥	书	乧	乨	乩	乪	乫	乬	乭	乮	乯
4e70	买	乱	乲	乳	乴	乵	乶	乷	乸	乹	乺	乻	乼	乽	乾	乿
4e80	亀	亁	乱	亃	亄	亅	了	亇	予	争	亊	事	二	亍	于	亏
4e90	亐	云	互	亓	五	井	亖	亗	亘	亘	亚	些	亜	亝	亚	亟
4ea0	亠	亡	亢	亣	交	亥	亦	产	亨	亩	亪	享	京	亭	亮	亯
4eb0	亰	亱	亲	亳	亴	亵	亶	亷	亸	亹	人	亻	亼	亽	亾	亿
4ec0	什	仁	仂	仃	仄	仅	仆	仇	仈	仉	今	介	仌	仍	从	仏
4ed0	仐	仑	仒	仓	仔	仕	他	仗	付	仙	仚	仛	仜	仝	仞	仟
4ee0	仠	仡	仢	代	令	以	仦	仧	仨	仩	仪	仫	们	仭	仮	仯
4ef0	仰	仱	仲	仳	仴	仵	件	价	仸	仹	仺	任	仼	份	仾	仿
4f00	伀	企	伂	伃	伄	伅	伆	伇	伈	伉	伊	伋	伌	伍	伎	伏
4f10	伐	休	伒	伓	伔	夫	伖	众	优	伙	会	伛	伜	伝	伞	伟
4f20	传	伡	伢	伣	伤	伥	伦	伧	伨	伩	伪	伫	伬	伭	伮	伯
4f30	估	伱	伲	伳	伴	伵	伶	伷	伸	伹	伺	伻	似	伽	伾	伿
4f40	佀	佁	佂	佃	佄	佅	但	伫	布	佉	佊	佋	佌	位	低	住
4f50	佐	佑	佒	体	占	何	佖	佗	佘	余	佚	佛	作	佝	佞	佟
4f60	你	佡	佢	佣	佤	佥	佦	佧	佨	佩	佪	佫	佬	佭	佮	佯
4f70	佰	佱	佲	佳	佴	并	佶	佷	佸	佹	佺	佻	佼	佽	佾	使
4f80	侀	侁	侂	侃	侄	侅	来	侇	侈	侉	侊	例	侌	侍	侎	侏
4f90	侐	侑	侒	侓	侔	侕	仑	侗	侘	侙	徇	供	侜	依	侞	侟
4fa0	侠	価	侢	侣	侤	侥	侦	侧	侨	侩	侪	侫	侬	侭	侮	侯
4fb0	侰	侱	侲	侳	侴	侵	侣	局	侸	侹	侺	侻	侼	侽	侾	便
4fc0	俀	俣	系	促	俄	俅	俆	俇	俈	俉	俊	俋	俌	俍	俎	俏
4fd0	俐	俑	俒	俓	俔	俕	俖	俗	俘	俙	俚	俛	俜	保	俞	俟
4fe0	侠	信	俢	俣	俤	俥	俦	俧	俨	俩	俪	俫	俬	俭	修	俯
4ff0	俰	俱	俲	俳	俴	表	俶	俷	俸	俹	俺	俻	俼	俽	俾	俿
5000	伥	倁	倂	倃	倄	倅	俩	倇	倈	仓	倊	个	倌	倍	倎	倏
5010	倐	们	倒	倓	倔	倕	幸	倗	倘	候	倚	倛	倜	倝	倞	借
5020	倠	倡	倢	仿	値	倥	倦	倧	倨	倩	倪	伦	倬	倭	倮	倯
5030	倰	倱	倲	倳	倴	倵	倶	倷	倸	倹	债	倻	值	倽	倾	倿
5040	偀	偁	偂	偃	偄	偅	偆	假	偈	伟	偊	偋	偌	偍	偎	偏
5050	偐	偑	偒	偓	偔	偕	偖	偗	偘	偙	做	偛	停	偝	偞	偟
5060	偠	偡	偢	偣	偤	健	偦	偧	偨	偩	逼	偫	偬	偭	偮	偯
5070	偰	偱	偲	偳	侧	侦	偶	偷	偸	偹	偺	偻	偼	伪	偾	偿
5080	傀	傁	傂	傃	傄	傅	傆	傇	僳	傉	傊	傋	傌	傍	傎	傏
5090	傐	杰	傒	傓	傔	傕	伧	傗	伞	备	效	傛	傜	傝	傞	傟
50a0	傠	傡	家	傣	傤	傥	傦	傧	储	傩	傪	傫	催	佣	傮	偬
50b0	傰	傱	傲	传	伛	债	傶	伤	傸	傹	傺	傻	傼	傽	倾	傿
50c0	僀	僁	偻	僃	僄	仅	僆	僇	僈	佥	仙	僋	僌	働	僎	像
50d0	僐	侨	僒	僓	僔	仆	僖	僗	僘	僙	僚	僛	僜	僝	伪	僟
50e0	僠	僡	僢	僣	僤	侥	僦	僧	偾	僩	僪	僫	僬	僭	僮	僯
50f0	僰	雇	僲	僳	僴	僵	僶	僷	僸	价	僺	僻	僼	僽	僾	僿
5100	仪	儁	侬	儃	亿	儅	儆	儇	侩	俭	儊	儋	儌	儍	儎	儏
5110	傧	儑	儒	儓	俦	侪	儖	儗	尽	儙	儚	儛	儜	儝	儞	偿
5120	儠	儡	儢	儣	儤	儥	儦	儧	儨	儩	优	儫	儬	儭	儮	儯
5130	儰	儱	储	儳	儴	儵	儶	俪	儸	儹	傩	傥	俨	儽	儾	儿
5140	兀	允	兂	元	兄	充	兆	凶	先	光	兊	克	兑	免	兎	兏
5150	児	兑	儿	兓	兔	兕	兖	兖	兘	兙	党	兛	兜	兝	兞	兟
5160	兠	兡	兢	兣	兤	入	兦	内	全	两	兪	八	公	六	兮	兯
5170	兰	共	兲	关	兴	兵	其	具	典	兹	兺	养	兼	兽	兾	兿
5180	冀	冁	冂	冃	冄	内	円	冇	冈	冉	册	冋	册	再	冎	冏
5190	冐	胄	冒	冓	冔	冕	冖	冗	冘	写	冚	军	农	冝	冞	冟
51a0	冠	冡	冢	冣	冤	冥	冦	冧	冨	冩	幂	冫	冬	冭	冮	冯
51b0	冰	冱	冲	决	冴	况	冶	冷	冸	冹	冺	冻	冼	冽	冾	冿
51c0	净	凁	凂	凃	凄	凅	准	凇	净	凉	凊	凋	凌	冻	凎	减
51D0	凐	凑	凒	凓	凔	凕	凖	凗	凘	凙	凚	凛	凛	凝	凞	凟
51E0	几	凡	凢	凣	凤	凥	処	凧	凨	凩	凪	凫	凬	凭	凮	凯
51F0	凰	凯	凲	凳	凴	凵	凶	凷	凸	凹	出	击	凼	函	凾	凿
5200	刀	刁	刂	刃	刄	刅	分	切	刈	刉	刊	刋	刌	刍	刎	刏
5210	刐	刑	划	刓	刔	刕	刖	列	刘	则	刚	创	刜	初	刞	刟
5220	删	刡	刢	刣	判	别	刦	刧	刨	利	删	别	刬	刭	刮	刯
5230	到	刱	刲	刳	刴	刵	制	刷	券	刹	刺	刻	刼	刽	刾	刿
5240	剀	剁	剂	剃	刭	剅	剆	则	剈	锉	削	克	剌	前	刹	剏
5250	剐	剑	剒	剓	剔	剕	剖	剗	剘	剙	剚	刚	剜	剥	剞	剟
5260	剠	剡	剢	剣	剤	剥	剦	剧	剨	剩	剪	剫	剬	剭	剐	副
5270	剰	剱	割	剳	剀	创	剶	铲	剸	剹	剺	剻	剼	剽	剾	剿
5280	劀	劁	劂	划	札	劅	劆	剧	劈	刘	刽	劋	刿	剑	劎	劏
5290	劐	剂	劒	劓	劔	劕	劖	劗	劘	劙	劚	力	劜	劝	办	功
52A0	加	务	劢	劣	劤	劥	劦	劧	动	助	努	劫	劬	劭	劮	劯
52B0	劰	励	劲	劳	労	劵	劶	劷	劸	効	劺	劻	劼	劽	劾	势
52C0	勀	劲	勂	勃	勄	勅	勆	勇	勈	勉	勊	勋	勌	勍	勎	勏
52D0	勐	勑	勒	勓	勔	动	勖	勗	勘	务	勚	勋	勜	胜	劳	募
52E0	勠	勡	势	勣	勤	勥	勦	勧	勨	勩	勪	勫	勬	勭	勮	勯
52F0	勰	劢	勲	勋	勴	励	勶	勷	劝	勹	勺	匀	勼	勽	勾	勿
5300	匀	匁	匂	匃	匄	包	匆	匇	匈	匉	匊	陶	匌	匍	匎	匏
5310	匐	匑	匒	匓	匔	匕	化	北	匘	匙	匚	匛	匜	匝	匞	匟
5320	匠	匡	匢	匣	匤	匥	匦	匧	匨	匩	匪	匫	匬	匦	匮	汇
5330	匰	匮	匲	匳	匴	匵	匶	匷	匸	匹	区	医	匼	匽	匾	匿
5340	区	十	卂	千	卄	卅	卆	升	午	卉	半	卋	卌	卍	华	协
5350	卐	卑	卒	卓	协	单	卖	南	単	卙	博	卛	卜	卝	卞	卟
5360	占	卡	卢	卣	卤	卥	卦	卧	卨	卩	卪	卫	卬	卭	卮	卯
5370	印	危	卲	即	却	卵	卶	卷	卸	恤	卺	却	卼	卽	卾	卿
5380	厀	厁	厂	厃	厄	厅	历	厇	厈	厉	厊	压	厌	厍	厎	厏
5390	厐	厑	厒	厓	厔	厕	厖	厗	厘	厍	厚	厛	厜	厝	厞	原
53a0	厕	厡	厢	厣	厤	厥	厦	厧	厨	厩	厪	厫	厬	厌	厮	厯
53b0	厰	厱	厉	厳	厣	厵	厶	厷	厸	厹	厺	去	厼	厽	厾	县
53c0	叀	叁	参	参	叄	叅	叆	叇	又	叉	及	友	双	反	収	叏
53d0	叐	发	叒	叓	叔	叕	取	受	变	叙	叚	叛	叜	叝	叞	叟
53e0	叠	叡	丛	口	古	句	另	叧	叨	叩	只	叫	召	叭	叮	可
53f0	台	叱	史	右	叴	叵	叶	号	司	叹	叺	叻	叼	叽	叾	叿
5400	吀	吁	吂	吃	各	吅	吆	吇	合	吉	吊	吋	同	名	后	吏
5410	吐	向	吒	吓	吔	吕	吖	吗	吘	吙	吚	君	吜	吝	吞	吟
5420	吠	吡	吢	吣	吤	吥	否	吧	吨	吩	吪	含	听	吭	吮	启
5430	吰	吱	吲	吴	吴	吵	呐	吷	吸	吹	吺	吻	吼	吽	吾	吿
5440	呀	呁	吕	呃	呄	呅	呆	呇	呈	呉	告	呋	呌	呍	呎	呏
5450	呐	呑	呒	呓	呔	呕	呖	呗	员	呙	呚	呛	呜	呝	呞	呟
5460	呠	呡	呢	呣	呤	呥	呦	呧	周	呩	呪	呫	呬	呭	呮	呯
5470	呰	呱	呲	味	呴	呵	呶	呷	呸	呹	呺	呻	呼	命	呾	呿
5480	咀	咁	咂	咃	咄	咅	咆	咇	咈	咉	咊	咋	和	咍	咎	咏
5490	咐	咑	咒	咓	咔	咕	咖	咗	咘	咙	咚	咛	咜	咝	咞	咟
54a0	咠	咡	咢	咣	咤	咥	咦	咧	咨	咩	咪	咫	咬	咭	咮	咯
54b0	咰	咱	咲	咳	咴	咵	咶	啕	咸	咹	咺	咻	呙	咽	咾	咿
54c0	哀	品	哂	哃	哄	哅	哆	哇	哈	哉	哊	哋	哌	响	哎	哏
54d0	哐	哑	哒	哓	哔	哕	哖	哗	哘	哙	哚	哛	哜	哝	哞	哟
54e0	哠	员	哢	哣	哤	哥	哦	哧	哨	哩	哪	哫	哬	哭	哮	哯
54f0	哰	哱	哲	哳	哴	哵	哶	哷	哸	哹	哺	哻	哼	哽	哾	哿
5500	唀	唁	唂	唃	呗	唅	唆	唇	唈	唉	唊	唋	唌	唍	唎	唏
5510	唐	唑	唒	唓	唔	唕	唖	唗	唘	唙	唚	唛	唜	唝	唞	唟
5520	唠	唡	唢	唣	唤	唥	唦	唧	唨	唩	唪	唫	唬	唭	售	唯
5530	唰	唱	唲	唳	唴	唵	唶	唷	念	唹	唺	唻	唼	唽	唾	唿
5540	啀	啁	啂	啃	啄	啅	商	啇	啈	啉	啊	啋	啌	啍	啎	问
5550	啐	啑	啒	启	啔	啕	啖	啗	啘	啙	啚	啛	啜	啝	哑	启
5560	啠	啡	啢	衔	啤	啥	啦	啧	啨	啩	啪	啫	啬	啭	啮	啯
5570	啰	啱	啲	啳	啴	啵	啶	啷	啸	啹	啺	啻	啼	啽	啾	啿
5580	喀	喁	喂	喃	善	喅	喆	喇	喈	喉	喊	喋	喌	喍	喎	喏
5590	喐	喑	喒	喓	喔	喕	喖	喗	喘	喙	唤	喛	喜	喝	喞	喟
55a0	喠	喡	喢	喣	喤	喥	喦	喧	喨	喩	丧	喫	乔	喭	单	喯
55b0	喰	喱	哟	喳	喴	喵	営	喷	喸	喹	喺	喻	喼	喽	喾	喿
55c0	嗀	嗁	嗂	嗃	嗄	嗅	呛	啬	嗈	嗉	嗊	嗋	嗌	嗍	吗	嗏
55d0	嗐	嗑	嗒	嗓	嗔	嗕	嗖	嗗	嗘	嗙	呜	嗛	嗜	嗝	嗞	嗟
55e0	嗠	嗡	嗢	嗣	嗤	嗥	嗦	嗧	嗨	唢	嗪	嗫	嗬	嗭	嗮	嗯
55f0	嗰	嗱	嗲	嗳	嗴	嗵	哔	嗷	嗸	嗹	嗺	嗻	嗼	嗽	嗾	嗿
5600	嘀	嘁	嘂	嘃	嘄	嘅	叹	嘇	嘈	嘉	嘊	嘋	嘌	喽	嘎	嘏
5610	嘐	嘑	嘒	嘓	呕	嘕	啧	尝	嘘	嘙	嘚	嘛	唛	嘝	嘞	嘟
5620	嘠	嘡	嘢	嘣	嘤	嘥	嘦	嘧	嘨	哗	嘪	嘫	嘬	嘭	唠	啸
5630	叽	嘱	嘲	嘳	嘴	哓	嘶	嘷	呒	嘹	嘺	嘻	嘼	嘽	嘾	嘿
5640	噀	恶	噂	噃	噄	噅	噆	噇	噈	噉	噊	噋	噌	噍	噎	噏
5650	噐	噑	噒	嘘	噔	噕	噖	噗	噘	噙	噚	噛	噜	噝	噞	噟
5660	哒	噡	噢	噣	噤	哝	哕	噧	器	噩	噪	噫	噬	噭	噮	嗳
5670	噰	噱	哙	噳	喷	噵	噶	噷	吨	当	噺	噻	噼	噽	噾	噿
5680	咛	嚁	嚂	嚃	嚄	嚅	嚆	吓	嚈	嚉	嚊	嚋	哜	嚍	嚎	嚏
5690	嚐	嚑	嚒	嚓	嚔	噜	嚖	嚗	嚘	啮	嚚	嚛	嚜	嚝	嚞	嚟
56a0	嚠	嚡	嚢	嚣	嚤	嚥	呖	嚧	咙	嚩	嚪	嚫	嚬	嚭	向	嚯
56b0	嚰	嚱	嚲	喾	严	嚵	嘤	嚷	嚸	嚹	嚺	嚻	嚼	嚽	嚾	嚿
56c0	啭	嗫	嚣	囃	囄	冁	囆	囇	呓	罗	囊	囋	囌	囍	囎	囏
56d0	囐	嘱	囒	囓	囔	囕	囖	囗	囘	囙	囚	四	囜	囝	回	囟
56e0	因	囡	团	団	囤	囥	囦	囧	囨	囩	囱	囫	囬	园	囮	囯
56f0	困	囱	囲	図	围	囵	囶	囷	囸	囹	固	囻	囼	国	图	囿
5700	圀	圁	圂	圃	圄	圅	圆	囵	圈	圉	圊	国	圌	围	圎	圏
5710	圐	圑	园	圆	圔	圕	图	圗	团	圙	圚	圛	圜	圝	圞	土
5720	圠	圡	圢	圣	圤	圥	圦	圧	在	圩	圪	圫	圬	圭	圮	圯
5730	地	圱	圲	圳	圴	圵	圶	圷	圸	圹	场	圻	圼	圽	圾	圿
5740	址	坁	坂	坃	坄	坅	坆	均	坈	坉	坊	坋	坌	坍	坎	坏
5750	坐	坑	坒	坓	坔	坕	坖	块	坘	坙	坚	坛	坜	坝	坞	坟
5760	坠	坡	坢	坣	坤	坥	坦	坧	坨	坩	坪	坫	坬	坭	坮	坯
5770	坰	坱	坲	坳	坴	丘	坶	坷	坸	坹	坺	坻	坼	坽	坾	坿
5780	垀	垁	垂	垃	垄	垅	垆	垇	垈	垉	垊	型	垌	垍	垎	垏
5790	垐	垑	垒	垓	垔	垕	垖	垗	垘	垙	垚	垛	垜	垝	垞	垟
57a0	垠	垡	垢	垣	垤	垥	垦	垧	垨	垩	垪	垫	垬	垭	垮	垯
57b0	垰	垱	垲	垳	垴	垵	垶	垷	垸	垹	垺	垻	垼	垽	垾	垿
57c0	埀	埁	埂	埃	埄	埅	埆	埇	埈	埉	埊	埋	埌	埍	城	埏
57d0	埐	埑	埒	埓	埔	埕	埖	埗	埘	埙	埚	埛	埜	埝	埞	域
57e0	埠	垭	埢	埣	埤	埥	埦	埧	埨	埩	埪	埫	埬	埭	埮	埯
57f0	埰	埱	埲	埳	埴	埵	埶	执	埸	培	基	埻	埼	埽	埾	埿
5800	堀	堁	堂	堃	堄	坚	堆	堇	堈	堉	垩	堋	堌	堍	堎	堏
5810	堐	堑	堒	堓	堔	堕	堖	堗	堘	堙	堚	堛	堜	埚	堞	堟
5820	堠	堡	堢	堣	堤	堥	堦	堧	堨	堩	堪	堫	堬	堭	堮	尧
5830	堰	报	堲	堳	场	堵	堶	堷	堸	堹	堺	堻	堼	堽	堾	堿
5840	塀	塁	塂	塃	塄	塅	塆	塇	塈	塉	块	茔	塌	塍	塎	垲
5850	塐	塑	埘	塓	塔	塕	塖	涂	塘	塙	冢	塛	塜	塝	塞	塟
5860	塠	塡	坞	塣	埙	塥	塦	塧	塨	塩	塪	填	塬	塭	塮	塯
5870	塰	塱	塲	塳	塴	尘	塶	塷	塸	堑	塺	塻	塼	塽	塾	塿
5880	墀	墁	墂	境	墄	墅	墆	墇	墈	墉	垫	墋	墌	墍	墎	墏
5890	墐	墑	墒	墓	墔	墕	墖	増	墘	墙	墚	墛	坠	墝	增	墟
58a0	墠	墡	墢	墣	墤	墥	墦	墧	墨	墩	墪	墫	墬	墭	堕	墯
58b0	墰	墱	墲	坟	墴	墵	墶	墷	墸	墹	墺	墻	墼	墽	垦	墿
58c0	壀	壁	壂	壃	壄	壅	壆	坛	壈	壉	壊	壋	壌	壍	壎	壏
58d0	壐	壑	壒	压	壔	壕	壖	壗	垒	圹	垆	壛	壜	壝	坏	垄
58e0	壠	壡	坜	壣	壤	壥	壦	壧	壨	坝	壪	士	壬	壭	壮	壮
58f0	声	壱	売	壳	壴	壵	壶	壷	壸	壹	壶	壻	壼	寿	壾	壿
5900	夀	夁	夂	夃	处	夅	夆	备	夈	変	夊	夋	夌	复	夎	夏
5910	夐	夑	夒	夓	夔	夕	外	夗	夘	夙	多	夛	夜	夝	夞	够
5920	够	夡	梦	夣	夤	夥	夦	大	夨	天	太	夫	夬	夭	央	夯
5930	夰	失	夲	夳	头	夵	夶	夷	夸	夹	夺	夻	夼	夽	夹	夿
5940	奀	奁	奂	奃	奄	奅	奆	奇	奈	奉	奊	奋	奌	奍	奎	奏
5950	奂	契	奒	奓	奔	奕	奖	套	奘	奙	奚	奛	奜	奝	奞	奟
5960	奠	奡	奢	奣	奤	奥	奦	奥	奨	奁	夺	奫	奖	奭	奋	奯
5970	奰	奱	奲	女	奴	奵	奶	奷	奸	她	奺	奻	奼	好	奾	奿
5980	妀	妁	如	妃	妄	妅	妆	妇	妈	妉	妊	妋	妌	妍	妎	妏
5990	妐	妑	妒	妓	妔	妕	妖	妗	妘	妙	妚	妛	妜	妆	妞	妟
59a0	妠	妡	妢	妣	妤	妥	妦	妧	妨	妩	妪	妫	妬	妭	妮	妯
59b0	妰	妱	妲	你	妴	妵	妶	妷	妸	妹	妺	妻	妼	妽	妾	妿
59c0	姀	姁	姂	姃	姄	姅	姆	姇	姈	姉	姊	始	姌	姗	姎	姏
59d0	姐	姑	姒	姓	委	姕	姖	姗	姘	姙	姚	姛	姜	姝	姞	姟
59e0	姠	姡	姢	姣	姤	姥	奸	姧	姨	姩	侄	姫	姬	姭	姮	姯
59f0	姰	姱	姲	姳	姴	姵	姶	姷	姸	姹	姺	姻	姼	姽	姾	姿
5a00	娀	威	娂	娃	娄	娅	娆	娇	娈	娉	娊	娋	娌	娍	娎	娏
5a10	娐	娑	娒	娓	娔	娕	娖	娗	娘	娙	娚	娱	娜	娝	娞	娟
5a20	娠	娡	娢	娣	娤	娥	娦	娧	娨	娩	娪	娫	娬	娭	娮	娯
5a30	娰	娱	娲	娳	娴	娵	娶	娷	娸	娹	娺	娻	娼	娽	娾	娿
5a40	婀	娄	婂	婃	婄	婅	婆	婇	婈	婉	婊	婋	婌	婍	婎	婏
5a50	婐	婑	婒	婓	婔	婕	婖	婗	婘	婙	婚	婛	婜	婝	婞	婟
5a60	婠	婡	婢	婣	婤	婥	妇	婧	婨	婩	婪	婫	婬	娅	婮	婯
5a70	婰	婱	婲	婳	婴	婵	婶	婷	婸	婹	婺	婻	婼	婽	婾	婿
5a80	媀	媁	媂	媃	媄	媅	媆	媇	媈	媉	媊	媋	媌	媍	媎	媏
5a90	媐	媑	媒	媓	媔	媕	媖	媗	媘	媙	媚	媛	媜	媝	媞	媟
5aa0	媠	媡	媢	媣	媤	媥	媦	娲	媨	媩	媪	媫	媬	媭	媮	妫
5ab0	媰	媱	媲	媳	媴	媵	媶	媷	媸	媹	媺	媻	媪	妈	媾	媿
5ac0	嫀	嫁	嫂	嫃	嫄	嫅	嫆	嫇	嫈	嫉	嫊	嫋	嫌	嫍	嫎	嫏
5ad0	嫐	嫑	嫒	嫓	嫔	嫕	嫖	妪	嫘	嫙	嫚	嫛	嫜	嫝	嫞	嫟
5ae0	嫠	嫡	嫢	嫣	嫤	嫥	嫦	嫧	嫨	嫩	嫪	嫫	嫬	嫭	嫮	嫯
5af0	嫰	嫱	嫲	嫳	嫴	妩	嫶	嫷	嫸	嫹	嫺	娴	嫼	嫽	嫾	嫿
5b00	妫	嬁	嬂	嬃	嬄	嬅	嬆	嬇	娆	嬉	嬊	婵	娇	嬍	嬎	嬏
5b10	嬐	嬑	嬒	嬓	嬔	嬕	嬖	嬗	嬘	嫱	嬚	嬛	嬜	嬝	嬞	嬟
5b20	嬠	嫒	嬢	嬣	嬷	嬥	嬦	嬧	嬨	嬩	嫔	嬫	嬬	嬭	嬮	嬯
5b30	婴	嬱	嬲	嬳	嬴	嬵	嬶	嬷	婶	嬹	嬺	嬻	嬼	嬽	嬾	嬿
5b40	孀	孁	孂	娘	孄	孅	孆	孇	孈	孉	孊	孋	娈	孍	孎	孏
5b50	子	孑	孒	孓	孔	孕	孖	字	存	孙	孚	孛	孜	孝	孞	孟
5b60	孠	孡	孢	季	孤	孥	学	孧	孨	孩	孪	孙	孬	孭	孮	孯
5b70	孰	孱	孲	孳	孴	孵	孶	孷	学	孹	孺	孻	孼	孽	孾	孪
5b80	宀	宁	宂	它	宄	宅	宆	宇	守	安	宊	宋	完	宍	宎	宏
5b90	宐	宑	宒	宓	宔	宕	宖	宗	官	宙	定	宛	宜	宝	实	実
5ba0	宠	审	客	宣	室	宥	宦	宧	宨	宩	宪	宫	宬	宭	宫	宯
5bb0	宰	宱	宲	害	宴	宵	家	宷	宸	容	宺	宻	宼	宽	宾	宿
5bc0	寀	寁	寂	寃	寄	寅	密	寇	寈	寉	寊	寋	富	寍	寎	寏
5bd0	寐	寑	寒	寓	寔	寕	寖	寗	寘	寙	寚	寛	寜	寝	寞	察
5be0	寠	寡	寝	寣	寤	寥	实	宁	寨	审	寪	写	宽	寭	寮	寯
5bf0	寰	寱	寲	寳	寴	宠	宝	寷	寸	对	寺	寻	导	寽	対	寿
5c00	尀	封	専	尃	射	尅	将	将	专	尉	尊	寻	尌	对	导	小
5c10	尐	少	尒	尓	尔	尕	尖	尗	尘	尙	尚	尛	尜	尝	尞	尟
5c20	尠	尡	尢	尣	尤	尥	尦	尧	尨	尩	尪	尫	尬	尭	尮	尯
5c30	尰	就	尲	尳	尴	尵	尶	尴	尸	尹	尺	尻	尼	尽	尾	尿
5c40	局	屁	层	屃	屄	居	届	屇	屈	屉	届	屋	屌	屍	屎	屏
5c50	屐	屑	屒	屓	屔	展	屖	屗	屘	屙	屚	屛	屉	屝	属	屟
5c60	屠	屡	屡	屣	层	履	屦	屧	屦	屩	屪	屫	属	屭	屮	屯
5c70	屰	山	屲	屳	屴	屵	屶	屷	屸	屹	屺	屻	屼	屽	屾	屿
5c80	岀	岁	岂	岃	岄	岅	岆	岇	岈	岉	岊	岋	岌	岍	岎	岏
5c90	岐	岑	岒	岓	岔	岕	岖	岗	岘	岙	岚	岛	岜	岝	岞	岟
5ca0	岠	冈	岢	岣	岤	岥	岦	岧	岨	岩	岪	岫	岬	岭	岮	岯
5cb0	岰	岱	岲	岳	岴	岵	岶	岷	岸	岹	岺	岻	岼	岽	岾	岿
5cc0	峀	峁	峂	峃	峄	峅	峆	峇	峈	峉	峊	峋	峌	峍	峎	峏
5cd0	峐	峑	峒	峓	峔	峕	峖	峗	峘	峙	峚	峛	峜	峝	峞	峟
5ce0	峠	峡	峢	峣	峤	峥	峦	峧	峨	峩	峪	峫	峬	峭	峮	峯
5cf0	峰	峱	峲	峳	岘	峵	岛	峷	峸	峹	峺	峻	峼	峡	峾	峿
5d00	崀	崁	崂	崃	崄	崅	崆	崇	崈	崉	崊	崋	崌	崃	崎	崏
5d10	崐	昆	崒	崓	崔	崕	崖	岗	崘	仑	崚	崛	崜	崝	崞	崟
5d20	崠	崡	峥	崣	崤	崥	崦	崧	崨	崩	崪	崫	崬	崭	崮	崯
5d30	崰	崱	崲	嵛	崴	崵	崶	崷	崸	崹	崺	崻	崼	崽	崾	崿
5d40	嵀	嵁	嵂	嵃	嵄	嵅	嵆	嵇	嵈	嵉	嵊	嵋	嵌	嵍	嵎	嵏
5d50	岚	嵑	嵒	嵓	嵔	嵕	嵖	嵗	嵘	嵙	嵚	嵛	嵜	嵝	嵞	嵟
5d60	嵠	嵡	嵢	嵣	嵤	嵥	嵦	嵧	嵨	嵩	嵪	嵫	嵬	嵭	嵮	嵯
5d70	嵰	嵱	嵲	嵳	嵴	嵵	嵶	嵷	嵸	嵹	嵺	嵻	嵼	嵽	嵾	嵿
5d80	嶀	嵝	嶂	嶃	崭	嶅	嶆	岖	嶈	嶉	嶊	嶋	嶌	嶍	嶎	嶏
5d90	嶐	嶑	嶒	嶓	嶔	嶕	嶖	崂	嶘	嶙	嶚	嶛	嶜	嶝	嶞	嶟
5da0	峤	嶡	嶢	嶣	嶤	嶥	嶦	峄	嶨	嶩	嶪	嶫	嶬	嶭	嶮	嶯
5db0	嶰	嶱	嶲	嶳	嶴	嶵	嶶	嶷	嵘	嶹	岭	嶻	屿	岳	嶾	嶿
5dc0	巀	巁	巂	巃	巄	巅	巆	巇	巈	巉	巊	岿	巌	巍	巎	巏
5dd0	巐	巑	峦	巓	巅	巕	巖	巗	巘	巙	巚	巛	巜	川	州	巟
5de0	巠	巡	巢	巣	巤	工	左	巧	巨	巩	巪	巫	巬	巭	差	巯
5df0	巯	己	已	巳	巴	巵	巶	巷	巸	卺	巺	巻	巼	巽	巾	巿
5e00	帀	币	市	布	帄	帅	帆	帇	师	帉	帊	帋	希	帍	帎	帏
5e10	帐	帑	帒	帓	帔	帕	帖	帗	帘	帙	帚	帛	帜	帝	帞	帟
5e20	帠	帡	帢	帣	帤	帅	带	帧	帨	帩	帪	师	帬	席	帮	帯
5e30	帰	帱	帲	帐	帴	帵	带	帷	常	帹	帺	帻	帼	帽	帾	帿
5e40	帧	幁	幂	帏	幄	幅	幆	幇	幈	幉	幊	幋	幌	幍	幎	幏
5e50	幐	幑	幒	幓	幔	幕	幖	帼	帻	幙	幚	幛	幜	幝	幞	帜
5e60	幠	幡	幢	币	幤	幥	幦	幧	幨	幩	幪	帮	帱	幭	幮	幯
5e70	幰	幱	干	平	年	开	并	幷	幸	干	幺	幻	幼	幽	几	广
5e80	庀	庁	庂	広	庄	庅	庆	庇	庈	庉	床	庋	庌	庍	庎	序
5e90	庐	庑	庒	库	应	底	庖	店	庘	庙	庚	庛	府	庝	庞	废
5ea0	庠	庡	庢	庣	庤	庥	度	座	庨	庩	庪	库	庬	庭	庮	庯
5eb0	庰	庱	庲	庳	庴	庵	庶	康	庸	庹	庺	庻	庼	庽	庾	庿
5ec0	廀	厕	厢	廃	厩	廅	廆	廇	厦	廉	廊	廋	廌	廍	廎	廏
5ed0	廐	廑	廒	廓	廔	廕	廖	廗	廘	廙	厨	廛	廜	廝	廞	庙
5ee0	厂	庑	废	广	廤	廥	廦	廧	廨	廪	廪	廫	庐	廭	廮	廯
5ef0	廰	廱	廲	厅	廴	廵	延	廷	廸	廹	建	廻	廼	廽	廾	廿
5f00	开	弁	异	弃	弄	弅	弆	弇	弈	弉	弊	弋	弌	弍	弎	式
5f10	弐	弑	弑	弓	吊	引	弖	弗	弘	弙	弚	弛	弜	弝	弞	弟
5f20	张	弡	弢	弣	弤	弥	弦	弧	弨	弩	弪	弫	弬	弭	弮	弯
5f30	弰	弱	弲	弪	弴	张	弶	强	弸	弹	强	弻	弼	弽	弾	弿
5f40	彀	彁	彂	彃	彄	彅	彆	彇	弹	彉	彊	彋	弥	彍	弯	彏
5f50	彐	彑	归	当	彔	录	彖	彗	彘	汇	彚	彛	彜	彝	彞	彟
5f60	彠	彡	形	彣	彤	彦	彦	彧	彨	彩	彪	雕	彬	彭	彮	彯
5f70	彰	影	彲	彳	彴	彵	彶	彷	彸	役	彺	彻	彼	彽	彾	佛
5f80	往	征	徂	徃	径	待	徆	徇	很	徉	徊	律	後	徍	徎	徏
5f90	徐	径	徒	従	徔	徕	徖	得	徘	徙	徚	徛	徜	徝	从	徟
5fa0	徕	御	徢	徣	徤	徥	徦	徧	徨	复	循	徫	徬	徭	微	徯
5fb0	徰	徱	徲	徳	徴	徵	徶	德	徸	彻	徺	徻	徼	徽	徾	徿
5fc0	忀	忁	忂	心	忄	必	忆	忇	忈	忉	忊	忋	忌	忍	忎	忏
5fd0	忐	忑	忒	忓	忔	忕	忖	志	忘	忙	忚	忛	応	忝	忞	忟
5fe0	忠	忡	忢	忣	忤	忥	忦	忧	忨	忩	忪	快	忬	忭	忮	忯
5ff0	忰	忱	忲	忳	忴	念	忶	汹	忸	忹	忺	忻	忼	忽	忾	忿
6000	怀	态	怂	怃	怄	怅	怆	怇	怈	怉	怊	怋	怌	怍	怎	怏
6010	怐	怑	怒	怓	怔	怕	怖	怗	怘	怙	怚	怛	怜	思	怞	怟
6020	怠	怡	怢	怣	怤	急	怦	性	怨	怩	怪	怫	怬	怭	怮	怯
6030	怰	怱	怲	怳	怴	怵	怶	怷	怸	怹	怺	总	怼	怽	怾	怿
6040	恀	恁	恂	恃	恄	恅	恒	恇	恈	恉	恊	恋	恌	恍	恎	恏
6050	恐	恑	恒	恓	恔	恕	恖	恗	恘	恙	恚	恛	恜	恝	恞	汹
6060	恠	恡	恢	恣	恤	耻	恦	恧	恨	恩	恪	恫	恬	恭	恮	息
6070	恰	恱	恲	恳	恴	恵	恶	恷	恸	恹	恺	恻	恼	恽	恾	恿
6080	悀	悁	悂	悃	悄	悦	悆	悇	悈	悉	悊	悋	悌	悍	悎	悏
6090	悐	悑	悒	悓	悔	悕	悖	悗	悘	悙	悚	悛	悜	悝	悞	悟
60a0	悠	悡	悢	患	悤	悥	悦	悧	您	悩	悪	悫	悬	悭	悮	悯
60b0	悰	悱	悲	悳	悴	怅	闷	悷	悸	悹	悺	悻	悼	凄	悾	悿
60c0	惀	惁	惂	惃	惄	情	惆	惇	惈	惉	惊	惋	惌	惍	惎	惏
60d0	惐	惑	惒	惓	惔	惕	惖	惗	惘	惙	惚	惛	惜	惝	惞	惟
60e0	惠	恶	惢	惣	惤	惥	惦	惧	惨	惩	惪	惫	惬	惭	惮	惯
60f0	惰	恼	恽	想	惴	惵	惶	惷	惸	惹	惺	恻	惼	惽	惾	惿
6100	愀	愁	愂	愃	愄	愅	愆	愇	愈	愉	愊	愋	愌	愍	愎	意
6110	愐	愑	愒	愓	愔	愕	愖	愗	愘	愙	愚	爱	惬	愝	愞	感
6120	愠	愡	愢	愣	愤	愥	愦	愧	悫	愩	愪	愫	愬	愭	愮	愯
6130	愰	愱	愲	愳	怆	愵	愶	恺	愸	愹	愺	愻	愼	愽	忾	愿
6140	慀	慁	慂	慃	栗	慅	慆	慇	慈	慉	慊	态	慌	愠	慎	慏
6150	慐	慑	慒	慓	慔	慕	慖	慗	惨	慙	惭	慛	慜	慝	慞	恸
6160	慠	慡	慢	惯	悫	慥	慦	慧	慨	慩	怄	怂	慬	慭	虑	慯
6170	慰	慱	慲	悭	慴	慵	庆	慷	慸	慹	慺	慻	戚	慽	欲	慿
6180	憀	憁	忧	憃	憄	憅	憆	憇	憈	憉	惫	憋	憌	憍	憎	憏
6190	怜	凭	愦	憓	憔	憕	憖	憗	憘	憙	惮	憛	憜	憝	憞	憟
61a0	憠	憡	憢	憣	愤	憥	憦	憧	憨	憩	憪	悯	憬	憭	怃	憯
61b0	憰	憱	宪	憳	憴	憵	忆	憷	憸	憹	憺	憻	憼	憽	憾	憿
61c0	懀	懁	懂	懃	懄	懅	懆	恳	懈	应	懊	懋	怿	懔	懎	懏
61d0	懐	懑	懒	懓	懔	懕	懖	懗	懘	懙	懚	懛	懜	懝	懞	怼
61e0	懠	懡	懢	懑	懤	懥	懦	懧	恹	懩	懪	懫	懬	懭	懮	懯
61f0	懰	懱	惩	懳	懴	懵	懒	怀	悬	懹	忏	懻	惧	懽	慑	懿
6200	恋	戁	戂	戃	戄	戅	戆	戇	戈	戉	戊	戋	戌	戍	戎	戏
6210	成	我	戒	戓	戋	戕	或	戗	战	戙	戚	戛	戜	戝	戞	戟
6220	戠	戡	戢	戣	戤	戥	戦	戗	戨	戬	截	戫	戬	戭	戮	戯
6230	战	戱	戏	戳	戴	戵	户	户	戸	戹	戺	戻	戼	戽	戾	房
6240	所	扁	扂	扃	扄	扅	扆	扇	扈	扉	扊	手	扌	才	扎	扏
6250	扐	扑	扒	打	扔	払	扖	扗	托	扙	扚	扛	扜	扝	扞	扟
6260	扠	扡	扢	扣	扤	扥	扦	执	扨	扩	扪	扫	扬	扭	扮	扯
6270	扰	扱	扲	扳	扴	扵	扶	扷	扸	批	扺	扻	扼	扽	找	承
6280	技	抁	抂	抃	抄	抅	抆	抇	抈	抉	把	抋	抌	抍	抎	抏
6290	抐	抑	抒	抓	抔	投	抖	抗	折	抙	抚	抛	抜	抝	択	抟
62a0	抠	抡	抢	抣	护	报	抦	抧	抨	抩	抪	披	抬	抭	抮	抯
62b0	抰	抱	抲	抳	抴	抵	抶	抷	抸	抹	抺	抻	押	抽	抾	抿
62c0	拀	拁	拂	拃	拄	担	拆	拇	拈	拉	拊	抛	拌	拍	拎	拏
62d0	拐	拑	拒	拓	拔	拕	拖	拗	拘	拙	拚	招	拜	拝	拞	拟
62e0	拠	拡	拢	拣	拤	拥	拦	拧	拨	择	拪	拫	括	拭	拮	拯
62f0	拰	拱	拲	拳	拴	拵	拶	拷	拸	拹	拺	拻	拼	拽	拾	拿
6300	挀	持	挂	挃	挄	挅	挆	指	挈	按	挊	挋	挌	挍	挎	挏
6310	挐	挑	挒	挓	挔	挕	挖	挗	挘	挙	挚	挛	挜	挝	挞	挟
6320	挠	挡	挢	挣	挤	挥	挦	挧	挨	挩	挪	挫	挬	挭	挮	振
6330	挰	挱	挲	挳	挴	挵	挶	挷	挸	挹	挺	挻	挼	挽	挟	挿
6340	捀	捁	捂	捃	捄	捅	捆	捇	捈	捉	捊	捋	捌	捍	捎	捏
6350	捐	捑	捒	捓	捔	捕	捖	捗	捘	捙	捚	捛	捜	捝	捞	损
6360	捠	捡	换	捣	捤	捥	捦	捧	舍	捩	捪	扪	捬	捭	据	捯
6370	捰	捱	卷	捳	捴	捵	捶	捷	捸	捹	捺	捻	捼	捽	捾	捿
6380	掀	掁	掂	扫	抡	掅	掆	掇	授	掉	掊	掋	掌	掍	掎	掏
6390	掐	掑	排	掓	掔	掕	掖	掗	掘	挣	掚	挂	掜	掝	掞	掟
63a0	掠	采	探	掣	掤	接	掦	控	推	掩	措	掫	掬	掭	掮	掯
63b0	掰	掱	掲	掳	掴	掵	掶	掷	掸	掹	掺	掻	掼	掽	掾	掿
63c0	拣	揁	揂	揃	揄	揅	揆	揇	揈	揉	揊	揋	揌	揍	揎	描
63d0	提	揑	插	揓	揔	揕	揖	揗	揘	揙	扬	换	揜	揝	揞	揟
63e0	揠	握	揢	揣	揤	揥	揦	揧	揨	揩	揪	揫	揬	揭	挥	揯
63f0	揰	揱	揲	揳	援	揵	揶	揷	揸	背	揺	揻	揼	揽	揾	揿
6400	搀	搁	搂	搃	搄	搅	搆	搇	搈	搉	搊	搋	搌	损	搎	搏
6410	搐	搑	搒	搓	搔	搕	摇	捣	搘	搙	搚	搛	搜	搝	搞	搟
6420	搠	搡	搢	搣	搤	搥	搦	搧	搨	搩	搪	搫	搬	搭	搮	掏
6430	搰	搱	搲	搳	搴	搵	抢	搷	搸	搹	携	搻	搼	搽	搾	搿
6440	捂	摁	摂	摃	摄	摅	摆	摇	摈	摉	摊	摋	摌	摍	摎	摏
6450	摐	掴	摒	摓	摔	摕	摖	摗	摘	摙	摚	摛	掼	摝	摞	搂
6460	摠	摡	摢	摣	摤	摥	摦	摧	摨	摩	摪	摫	摬	摭	摮	挚
6470	摰	摱	摲	抠	摴	摵	抟	摷	摸	摹	摺	掺	摼	摽	摾	摿
6480	撀	撁	撂	撃	撄	撅	撆	撇	捞	撉	撊	撋	撌	撍	撎	撏
6490	撑	撑	撒	挠	撔	撕	撖	撗	撘	撙	捻	撛	撜	撝	撞	挢
64a0	撠	撡	撢	掸	撤	拨	撦	撧	撨	撩	撪	抚	撬	播	撮	撯
64b0	撰	撱	扑	揿	撴	撵	撶	撷	撸	撹	撺	挞	撼	撽	挝	捡
64c0	擀	拥	擂	擃	掳	擅	擆	择	擈	擉	击	挡	擌	操	擎	擏
64d0	擐	擑	擒	擓	担	擕	擖	擗	擘	擙	据	擛	擜	擝	擞	擟
64e0	挤	擡	擢	擣	擤	擥	擦	擧	擨	擩	擪	擫	拟	擭	擮	摈
64f0	拧	搁	掷	擳	扩	擵	擶	撷	擸	擹	摆	擞	撸	擽	扰	擿
6500	攀	攁	攂	攃	摅	攅	撵	攇	攈	攉	攊	攋	攌	攍	攎	拢
6510	攐	攑	攒	攓	拦	攕	撄	攗	攘	搀	攚	撺	携	摄	攞	攟
6520	攠	攡	攒	挛	摊	攥	攦	攧	攨	攩	搅	攫	揽	攭	攮	支
6530	攰	攱	攲	攳	攴	攵	收	考	攸	改	攺	攻	攼	攽	放	政
6540	敀	敁	敂	敃	敄	故	敆	敇	效	敉	敊	敋	敌	敍	敎	敏
6550	敐	救	敒	敓	敔	敕	敖	败	叙	教	敚	敛	敜	敝	敞	敟
6560	敠	敡	敢	散	敤	敥	敦	敧	敨	敩	敪	敫	敬	敭	敮	敯
6570	数	敱	敲	敳	整	敌	敶	敷	数	敹	敺	敻	敼	敽	敾	敿
6580	斀	斁	敛	毙	斄	斅	斆	文	斈	斉	斊	斋	斌	斍	斎	斏
6590	斐	斑	斒	斓	斔	斓	斖	斗	斘	料	斚	斛	斜	斝	斞	斟
65a0	斠	斡	斢	斣	斤	斥	斦	斧	斨	斩	斪	斫	斩	断	斮	斯
65b0	新	斱	斲	斳	斴	斵	斶	断	斸	方	斺	斻	於	施	斾	斿
E;*/
class Chinese{
    protected $str='一 丁 丂 七 丄 丅 丆 万 丈 三 上 下 丌 不 与 丏 丐 丑 丒 专 且 丕 世 丗 丘 丙 业 丛 东 丝 丞 丢 丠 両 丢 丣 两 严 并 丧 丨 丩 个 丫 丬 中 丮 丯 丰 丱 串 丳 临 丵 丶 丷 丸 丹 为 主 丼 丽 举 丿 乀 乁 乂 乃 乄 久 乆 乇 么 义 乊 之 乌 乍 乎 乏 乐 乑 乒 乓 乔 乕 乖 乗 乘 乙 乚 乛 乜 九 乞 也 习 乡 乢 乣 乤 乥 书 乧 乨 乩 乪 乫 乬 乭 乮 乯 买 乱 乲 乳 乴 乵 乶 乷 乸 乹 乺 乻 乼 乽 乾 乿 亀 亁 乱 亃 亄 亅 了 亇 予 争 亊 事 二 亍 于 亏 亐 云 互 亓 五 井 亖 亗 亘 亘 亚 些 亜 亝 亚 亟 亠 亡 亢 亣 交 亥 亦 产 亨 亩 亪 享 京 亭 亮 亯 亰 亱 亲 亳 亴 亵 亶 亷 亸 亹 人 亻 亼 亽 亾 亿 什 仁 仂 仃 仄 仅 仆 仇 仈 仉 今 介 仌 仍 从 仏 仐 仑 仒 仓 仔 仕 他 仗 付 仙 仚 仛 仜 仝 仞 仟 仠 仡 仢 代 令 以 仦 仧 仨 仩 仪 仫 们 仭 仮 仯 仰 仱 仲 仳 仴 仵 件 价 仸 仹 仺 任 仼 份 仾 仿 伀 企 伂 伃 伄 伅 伆 伇 伈 伉 伊 伋 伌 伍 伎 伏 伐 休 伒 伓 伔 夫 伖 众 优 伙 会 伛 伜 伝 伞 伟 传 伡 伢 伣 伤 伥 伦 伧 伨 伩 伪 伫 伬 伭 伮 伯 估 伱 伲 伳 伴 伵 伶 伷 伸 伹 伺 伻 似 伽 伾 伿 佀 佁 佂 佃 佄 佅 但 伫 布 佉 佊 佋 佌 位 低 住 佐 佑 佒 体 占 何 佖 佗 佘 余 佚 佛 作 佝 佞 佟 你 佡 佢 佣 佤 佥 佦 佧 佨 佩 佪 佫 佬 佭 佮 佯 佰 佱 佲 佳 佴 并 佶 佷 佸 佹 佺 佻 佼 佽 佾 使 侀 侁 侂 侃 侄 侅 来 侇 侈 侉 侊 例 侌 侍 侎 侏 侐 侑 侒 侓 侔 侕 仑 侗 侘 侙 徇 供 侜 依 侞 侟 侠 価 侢 侣 侤 侥 侦 侧 侨 侩 侪 侫 侬 侭 侮 侯 侰 侱 侲 侳 侴 侵 侣 局 侸 侹 侺 侻 侼 侽 侾 便 俀 俣 系 促 俄 俅 俆 俇 俈 俉 俊 俋 俌 俍 俎 俏 俐 俑 俒 俓 俔 俕 俖 俗 俘 俙 俚 俛 俜 保 俞 俟 侠 信 俢 俣 俤 俥 俦 俧 俨 俩 俪 俫 俬 俭 修 俯 俰 俱 俲 俳 俴 表 俶 俷 俸 俹 俺 俻 俼 俽 俾 俿 伥 倁 倂 倃 倄 倅 俩 倇 倈 仓 倊 个 倌 倍 倎 倏 倐 们 倒 倓 倔 倕 幸 倗 倘 候 倚 倛 倜 倝 倞 借 倠 倡 倢 仿 値 倥 倦 倧 倨 倩 倪 伦 倬 倭 倮 倯 倰 倱 倲 倳 倴 倵 倶 倷 倸 倹 债 倻 值 倽 倾 倿 偀 偁 偂 偃 偄 偅 偆 假 偈 伟 偊 偋 偌 偍 偎 偏 偐 偑 偒 偓 偔 偕 偖 偗 偘 偙 做 偛 停 偝 偞 偟 偠 偡 偢 偣 偤 健 偦 偧 偨 偩 逼 偫 偬 偭 偮 偯 偰 偱 偲 偳 侧 侦 偶 偷 偸 偹 偺 偻 偼 伪 偾 偿 傀 傁 傂 傃 傄 傅 傆 傇 僳 傉 傊 傋 傌 傍 傎 傏 傐 杰 傒 傓 傔 傕 伧 傗 伞 备 效 傛 傜 傝 傞 傟 傠 傡 家 傣 傤 傥 傦 傧 储 傩 傪 傫 催 佣 傮 偬 傰 傱 傲 传 伛 债 傶 伤 傸 傹 傺 傻 傼 傽 倾 傿 僀 僁 偻 僃 僄 仅 僆 僇 僈 佥 仙 僋 僌 働 僎 像 僐 侨 僒 僓 僔 仆 僖 僗 僘 僙 僚 僛 僜 僝 伪 僟 僠 僡 僢 僣 僤 侥 僦 僧 偾 僩 僪 僫 僬 僭 僮 僯 僰 雇 僲 僳 僴 僵 僶 僷 僸 价 僺 僻 僼 僽 僾 僿 仪 儁 侬 儃 亿 儅 儆 儇 侩 俭 儊 儋 儌 儍 儎 儏 傧 儑 儒 儓 俦 侪 儖 儗 尽 儙 儚 儛 儜 儝 儞 偿 儠 儡 儢 儣 儤 儥 儦 儧 儨 儩 优 儫 儬 儭 儮 儯 儰 儱 储 儳 儴 儵 儶 俪 儸 儹 傩 傥 俨 儽 儾 儿 兀 允 兂 元 兄 充 兆 凶 先 光 兊 克 兑 免 兎 兏 児 兑 儿 兓 兔 兕 兖 兖 兘 兙 党 兛 兜 兝 兞 兟 兠 兡 兢 兣 兤 入 兦 内 全 两 兪 八 公 六 兮 兯 兰 共 兲 关 兴 兵 其 具 典 兹 兺 养 兼 兽 兾 兿 冀 冁 冂 冃 冄 内 円 冇 冈 冉 册 冋 册 再 冎 冏 冐 胄 冒 冓 冔 冕 冖 冗 冘 写 冚 军 农 冝 冞 冟 冠 冡 冢 冣 冤 冥 冦 冧 冨 冩 幂 冫 冬 冭 冮 冯 冰 冱 冲 决 冴 况 冶 冷 冸 冹 冺 冻 冼 冽 冾 冿 净 凁 凂 凃 凄 凅 准 凇 净 凉 凊 凋 凌 冻 凎 减 凐 凑 凒 凓 凔 凕 凖 凗 凘 凙 凚 凛 凛 凝 凞 凟 几 凡 凢 凣 凤 凥 処 凧 凨 凩 凪 凫 凬 凭 凮 凯 凰 凯 凲 凳 凴 凵 凶 凷 凸 凹 出 击 凼 函 凾 凿 刀 刁 刂 刃 刄 刅 分 切 刈 刉 刊 刋 刌 刍 刎 刏 刐 刑 划 刓 刔 刕 刖 列 刘 则 刚 创 刜 初 刞 刟 删 刡 刢 刣 判 别 刦 刧 刨 利 删 别 刬 刭 刮 刯 到 刱 刲 刳 刴 刵 制 刷 券 刹 刺 刻 刼 刽 刾 刿 剀 剁 剂 剃 刭 剅 剆 则 剈 锉 削 克 剌 前 刹 剏 剐 剑 剒 剓 剔 剕 剖 剗 剘 剙 剚 刚 剜 剥 剞 剟 剠 剡 剢 剣 剤 剥 剦 剧 剨 剩 剪 剫 剬 剭 剐 副 剰 剱 割 剳 剀 创 剶 铲 剸 剹 剺 剻 剼 剽 剾 剿 劀 劁 劂 划 札 劅 劆 剧 劈 刘 刽 劋 刿 剑 劎 劏 劐 剂 劒 劓 劔 劕 劖 劗 劘 劙 劚 力 劜 劝 办 功 加 务 劢 劣 劤 劥 劦 劧 动 助 努 劫 劬 劭 劮 劯 劰 励 劲 劳 労 劵 劶 劷 劸 効 劺 劻 劼 劽 劾 势 勀 劲 勂 勃 勄 勅 勆 勇 勈 勉 勊 勋 勌 勍 勎 勏 勐 勑 勒 勓 勔 动 勖 勗 勘 务 勚 勋 勜 胜 劳 募 勠 勡 势 勣 勤 勥 勦 勧 勨 勩 勪 勫 勬 勭 勮 勯 勰 劢 勲 勋 勴 励 勶 勷 劝 勹 勺 匀 勼 勽 勾 勿 匀 匁 匂 匃 匄 包 匆 匇 匈 匉 匊 陶 匌 匍 匎 匏 匐 匑 匒 匓 匔 匕 化 北 匘 匙 匚 匛 匜 匝 匞 匟 匠 匡 匢 匣 匤 匥 匦 匧 匨 匩 匪 匫 匬 匦 匮 汇 匰 匮 匲 匳 匴 匵 匶 匷 匸 匹 区 医 匼 匽 匾 匿 区 十 卂 千 卄 卅 卆 升 午 卉 半 卋 卌 卍 华 协 卐 卑 卒 卓 协 单 卖 南 単 卙 博 卛 卜 卝 卞 卟 占 卡 卢 卣 卤 卥 卦 卧 卨 卩 卪 卫 卬 卭 卮 卯 印 危 卲 即 却 卵 卶 卷 卸 恤 卺 却 卼 卽 卾 卿 厀 厁 厂 厃 厄 厅 历 厇 厈 厉 厊 压 厌 厍 厎 厏 厐 厑 厒 厓 厔 厕 厖 厗 厘 厍 厚 厛 厜 厝 厞 原 厕 厡 厢 厣 厤 厥 厦 厧 厨 厩 厪 厫 厬 厌 厮 厯 厰 厱 厉 厳 厣 厵 厶 厷 厸 厹 厺 去 厼 厽 厾 县 叀 叁 参 参 叄 叅 叆 叇 又 叉 及 友 双 反 収 叏 叐 发 叒 叓 叔 叕 取 受 变 叙 叚 叛 叜 叝 叞 叟 叠 叡 丛 口 古 句 另 叧 叨 叩 只 叫 召 叭 叮 可 台 叱 史 右 叴 叵 叶 号 司 叹 叺 叻 叼 叽 叾 叿 吀 吁 吂 吃 各 吅 吆 吇 合 吉 吊 吋 同 名 后 吏 吐 向 吒 吓 吔 吕 吖 吗 吘 吙 吚 君 吜 吝 吞 吟 吠 吡 吢 吣 吤 吥 否 吧 吨 吩 吪 含 听 吭 吮 启 吰 吱 吲 吴 吴 吵 呐 吷 吸 吹 吺 吻 吼 吽 吾 吿 呀 呁 吕 呃 呄 呅 呆 呇 呈 呉 告 呋 呌 呍 呎 呏 呐 呑 呒 呓 呔 呕 呖 呗 员 呙 呚 呛 呜 呝 呞 呟 呠 呡 呢 呣 呤 呥 呦 呧 周 呩 呪 呫 呬 呭 呮 呯 呰 呱 呲 味 呴 呵 呶 呷 呸 呹 呺 呻 呼 命 呾 呿 咀 咁 咂 咃 咄 咅 咆 咇 咈 咉 咊 咋 和 咍 咎 咏 咐 咑 咒 咓 咔 咕 咖 咗 咘 咙 咚 咛 咜 咝 咞 咟 咠 咡 咢 咣 咤 咥 咦 咧 咨 咩 咪 咫 咬 咭 咮 咯 咰 咱 咲 咳 咴 咵 咶 啕 咸 咹 咺 咻 呙 咽 咾 咿 哀 品 哂 哃 哄 哅 哆 哇 哈 哉 哊 哋 哌 响 哎 哏 哐 哑 哒 哓 哔 哕 哖 哗 哘 哙 哚 哛 哜 哝 哞 哟 哠 员 哢 哣 哤 哥 哦 哧 哨 哩 哪 哫 哬 哭 哮 哯 哰 哱 哲 哳 哴 哵 哶 哷 哸 哹 哺 哻 哼 哽 哾 哿 唀 唁 唂 唃 呗 唅 唆 唇 唈 唉 唊 唋 唌 唍 唎 唏 唐 唑 唒 唓 唔 唕 唖 唗 唘 唙 唚 唛 唜 唝 唞 唟 唠 唡 唢 唣 唤 唥 唦 唧 唨 唩 唪 唫 唬 唭 售 唯 唰 唱 唲 唳 唴 唵 唶 唷 念 唹 唺 唻 唼 唽 唾 唿 啀 啁 啂 啃 啄 啅 商 啇 啈 啉 啊 啋 啌 啍 啎 问 啐 啑 啒 启 啔 啕 啖 啗 啘 啙 啚 啛 啜 啝 哑 启 啠 啡 啢 衔 啤 啥 啦 啧 啨 啩 啪 啫 啬 啭 啮 啯 啰 啱 啲 啳 啴 啵 啶 啷 啸 啹 啺 啻 啼 啽 啾 啿 喀 喁 喂 喃 善 喅 喆 喇 喈 喉 喊 喋 喌 喍 喎 喏 喐 喑 喒 喓 喔 喕 喖 喗 喘 喙 唤 喛 喜 喝 喞 喟 喠 喡 喢 喣 喤 喥 喦 喧 喨 喩 丧 喫 乔 喭 单 喯 喰 喱 哟 喳 喴 喵 営 喷 喸 喹 喺 喻 喼 喽 喾 喿 嗀 嗁 嗂 嗃 嗄 嗅 呛 啬 嗈 嗉 嗊 嗋 嗌 嗍 吗 嗏 嗐 嗑 嗒 嗓 嗔 嗕 嗖 嗗 嗘 嗙 呜 嗛 嗜 嗝 嗞 嗟 嗠 嗡 嗢 嗣 嗤 嗥 嗦 嗧 嗨 唢 嗪 嗫 嗬 嗭 嗮 嗯 嗰 嗱 嗲 嗳 嗴 嗵 哔 嗷 嗸 嗹 嗺 嗻 嗼 嗽 嗾 嗿 嘀 嘁 嘂 嘃 嘄 嘅 叹 嘇 嘈 嘉 嘊 嘋 嘌 喽 嘎 嘏 嘐 嘑 嘒 嘓 呕 嘕 啧 尝 嘘 嘙 嘚 嘛 唛 嘝 嘞 嘟 嘠 嘡 嘢 嘣 嘤 嘥 嘦 嘧 嘨 哗 嘪 嘫 嘬 嘭 唠 啸 叽 嘱 嘲 嘳 嘴 哓 嘶 嘷 呒 嘹 嘺 嘻 嘼 嘽 嘾 嘿 噀 恶 噂 噃 噄 噅 噆 噇 噈 噉 噊 噋 噌 噍 噎 噏 噐 噑 噒 嘘 噔 噕 噖 噗 噘 噙 噚 噛 噜 噝 噞 噟 哒 噡 噢 噣 噤 哝 哕 噧 器 噩 噪 噫 噬 噭 噮 嗳 噰 噱 哙 噳 喷 噵 噶 噷 吨 当 噺 噻 噼 噽 噾 噿 咛 嚁 嚂 嚃 嚄 嚅 嚆 吓 嚈 嚉 嚊 嚋 哜 嚍 嚎 嚏 嚐 嚑 嚒 嚓 嚔 噜 嚖 嚗 嚘 啮 嚚 嚛 嚜 嚝 嚞 嚟 嚠 嚡 嚢 嚣 嚤 嚥 呖 嚧 咙 嚩 嚪 嚫 嚬 嚭 向 嚯 嚰 嚱 嚲 喾 严 嚵 嘤 嚷 嚸 嚹 嚺 嚻 嚼 嚽 嚾 嚿 啭 嗫 嚣 囃 囄 冁 囆 囇 呓 罗 囊 囋 囌 囍 囎 囏 囐 嘱 囒 囓 囔 囕 囖 囗 囘 囙 囚 四 囜 囝 回 囟 因 囡 团 団 囤 囥 囦 囧 囨 囩 囱 囫 囬 园 囮 囯 困 囱 囲 図 围 囵 囶 囷 囸 囹 固 囻 囼 国 图 囿 圀 圁 圂 圃 圄 圅 圆 囵 圈 圉 圊 国 圌 围 圎 圏 圐 圑 园 圆 圔 圕 图 圗 团 圙 圚 圛 圜 圝 圞 土 圠 圡 圢 圣 圤 圥 圦 圧 在 圩 圪 圫 圬 圭 圮 圯 地 圱 圲 圳 圴 圵 圶 圷 圸 圹 场 圻 圼 圽 圾 圿 址 坁 坂 坃 坄 坅 坆 均 坈 坉 坊 坋 坌 坍 坎 坏 坐 坑 坒 坓 坔 坕 坖 块 坘 坙 坚 坛 坜 坝 坞 坟 坠 坡 坢 坣 坤 坥 坦 坧 坨 坩 坪 坫 坬 坭 坮 坯 坰 坱 坲 坳 坴 丘 坶 坷 坸 坹 坺 坻 坼 坽 坾 坿 垀 垁 垂 垃 垄 垅 垆 垇 垈 垉 垊 型 垌 垍 垎 垏 垐 垑 垒 垓 垔 垕 垖 垗 垘 垙 垚 垛 垜 垝 垞 垟 垠 垡 垢 垣 垤 垥 垦 垧 垨 垩 垪 垫 垬 垭 垮 垯 垰 垱 垲 垳 垴 垵 垶 垷 垸 垹 垺 垻 垼 垽 垾 垿 埀 埁 埂 埃 埄 埅 埆 埇 埈 埉 埊 埋 埌 埍 城 埏 埐 埑 埒 埓 埔 埕 埖 埗 埘 埙 埚 埛 埜 埝 埞 域 埠 垭 埢 埣 埤 埥 埦 埧 埨 埩 埪 埫 埬 埭 埮 埯 埰 埱 埲 埳 埴 埵 埶 执 埸 培 基 埻 埼 埽 埾 埿 堀 堁 堂 堃 堄 坚 堆 堇 堈 堉 垩 堋 堌 堍 堎 堏 堐 堑 堒 堓 堔 堕 堖 堗 堘 堙 堚 堛 堜 埚 堞 堟 堠 堡 堢 堣 堤 堥 堦 堧 堨 堩 堪 堫 堬 堭 堮 尧 堰 报 堲 堳 场 堵 堶 堷 堸 堹 堺 堻 堼 堽 堾 堿 塀 塁 塂 塃 塄 塅 塆 塇 塈 塉 块 茔 塌 塍 塎 垲 塐 塑 埘 塓 塔 塕 塖 涂 塘 塙 冢 塛 塜 塝 塞 塟 塠 塡 坞 塣 埙 塥 塦 塧 塨 塩 塪 填 塬 塭 塮 塯 塰 塱 塲 塳 塴 尘 塶 塷 塸 堑 塺 塻 塼 塽 塾 塿 墀 墁 墂 境 墄 墅 墆 墇 墈 墉 垫 墋 墌 墍 墎 墏 墐 墑 墒 墓 墔 墕 墖 増 墘 墙 墚 墛 坠 墝 增 墟 墠 墡 墢 墣 墤 墥 墦 墧 墨 墩 墪 墫 墬 墭 堕 墯 墰 墱 墲 坟 墴 墵 墶 墷 墸 墹 墺 墻 墼 墽 垦 墿 壀 壁 壂 壃 壄 壅 壆 坛 壈 壉 壊 壋 壌 壍 壎 壏 壐 壑 壒 压 壔 壕 壖 壗 垒 圹 垆 壛 壜 壝 坏 垄 壠 壡 坜 壣 壤 壥 壦 壧 壨 坝 壪 士 壬 壭 壮 壮 声 壱 売 壳 壴 壵 壶 壷 壸 壹 壶 壻 壼 寿 壾 壿 夀 夁 夂 夃 处 夅 夆 备 夈 変 夊 夋 夌 复 夎 夏 夐 夑 夒 夓 夔 夕 外 夗 夘 夙 多 夛 夜 夝 夞 够 够 夡 梦 夣 夤 夥 夦 大 夨 天 太 夫 夬 夭 央 夯 夰 失 夲 夳 头 夵 夶 夷 夸 夹 夺 夻 夼 夽 夹 夿 奀 奁 奂 奃 奄 奅 奆 奇 奈 奉 奊 奋 奌 奍 奎 奏 奂 契 奒 奓 奔 奕 奖 套 奘 奙 奚 奛 奜 奝 奞 奟 奠 奡 奢 奣 奤 奥 奦 奥 奨 奁 夺 奫 奖 奭 奋 奯 奰 奱 奲 女 奴 奵 奶 奷 奸 她 奺 奻 奼 好 奾 奿 妀 妁 如 妃 妄 妅 妆 妇 妈 妉 妊 妋 妌 妍 妎 妏 妐 妑 妒 妓 妔 妕 妖 妗 妘 妙 妚 妛 妜 妆 妞 妟 妠 妡 妢 妣 妤 妥 妦 妧 妨 妩 妪 妫 妬 妭 妮 妯 妰 妱 妲 你 妴 妵 妶 妷 妸 妹 妺 妻 妼 妽 妾 妿 姀 姁 姂 姃 姄 姅 姆 姇 姈 姉 姊 始 姌 姗 姎 姏 姐 姑 姒 姓 委 姕 姖 姗 姘 姙 姚 姛 姜 姝 姞 姟 姠 姡 姢 姣 姤 姥 奸 姧 姨 姩 侄 姫 姬 姭 姮 姯 姰 姱 姲 姳 姴 姵 姶 姷 姸 姹 姺 姻 姼 姽 姾 姿 娀 威 娂 娃 娄 娅 娆 娇 娈 娉 娊 娋 娌 娍 娎 娏 娐 娑 娒 娓 娔 娕 娖 娗 娘 娙 娚 娱 娜 娝 娞 娟 娠 娡 娢 娣 娤 娥 娦 娧 娨 娩 娪 娫 娬 娭 娮 娯 娰 娱 娲 娳 娴 娵 娶 娷 娸 娹 娺 娻 娼 娽 娾 娿 婀 娄 婂 婃 婄 婅 婆 婇 婈 婉 婊 婋 婌 婍 婎 婏 婐 婑 婒 婓 婔 婕 婖 婗 婘 婙 婚 婛 婜 婝 婞 婟 婠 婡 婢 婣 婤 婥 妇 婧 婨 婩 婪 婫 婬 娅 婮 婯 婰 婱 婲 婳 婴 婵 婶 婷 婸 婹 婺 婻 婼 婽 婾 婿 媀 媁 媂 媃 媄 媅 媆 媇 媈 媉 媊 媋 媌 媍 媎 媏 媐 媑 媒 媓 媔 媕 媖 媗 媘 媙 媚 媛 媜 媝 媞 媟 媠 媡 媢 媣 媤 媥 媦 娲 媨 媩 媪 媫 媬 媭 媮 妫 媰 媱 媲 媳 媴 媵 媶 媷 媸 媹 媺 媻 媪 妈 媾 媿 嫀 嫁 嫂 嫃 嫄 嫅 嫆 嫇 嫈 嫉 嫊 嫋 嫌 嫍 嫎 嫏 嫐 嫑 嫒 嫓 嫔 嫕 嫖 妪 嫘 嫙 嫚 嫛 嫜 嫝 嫞 嫟 嫠 嫡 嫢 嫣 嫤 嫥 嫦 嫧 嫨 嫩 嫪 嫫 嫬 嫭 嫮 嫯 嫰 嫱 嫲 嫳 嫴 妩 嫶 嫷 嫸 嫹 嫺 娴 嫼 嫽 嫾 嫿 妫 嬁 嬂 嬃 嬄 嬅 嬆 嬇 娆 嬉 嬊 婵 娇 嬍 嬎 嬏 嬐 嬑 嬒 嬓 嬔 嬕 嬖 嬗 嬘 嫱 嬚 嬛 嬜 嬝 嬞 嬟 嬠 嫒 嬢 嬣 嬷 嬥 嬦 嬧 嬨 嬩 嫔 嬫 嬬 嬭 嬮 嬯 婴 嬱 嬲 嬳 嬴 嬵 嬶 嬷 婶 嬹 嬺 嬻 嬼 嬽 嬾 嬿 孀 孁 孂 娘 孄 孅 孆 孇 孈 孉 孊 孋 娈 孍 孎 孏 子 孑 孒 孓 孔 孕 孖 字 存 孙 孚 孛 孜 孝 孞 孟 孠 孡 孢 季 孤 孥 学 孧 孨 孩 孪 孙 孬 孭 孮 孯 孰 孱 孲 孳 孴 孵 孶 孷 学 孹 孺 孻 孼 孽 孾 孪 宀 宁 宂 它 宄 宅 宆 宇 守 安 宊 宋 完 宍 宎 宏 宐 宑 宒 宓 宔 宕 宖 宗 官 宙 定 宛 宜 宝 实 実 宠 审 客 宣 室 宥 宦 宧 宨 宩 宪 宫 宬 宭 宫 宯 宰 宱 宲 害 宴 宵 家 宷 宸 容 宺 宻 宼 宽 宾 宿 寀 寁 寂 寃 寄 寅 密 寇 寈 寉 寊 寋 富 寍 寎 寏 寐 寑 寒 寓 寔 寕 寖 寗 寘 寙 寚 寛 寜 寝 寞 察 寠 寡 寝 寣 寤 寥 实 宁 寨 审 寪 写 宽 寭 寮 寯 寰 寱 寲 寳 寴 宠 宝 寷 寸 对 寺 寻 导 寽 対 寿 尀 封 専 尃 射 尅 将 将 专 尉 尊 寻 尌 对 导 小 尐 少 尒 尓 尔 尕 尖 尗 尘 尙 尚 尛 尜 尝 尞 尟 尠 尡 尢 尣 尤 尥 尦 尧 尨 尩 尪 尫 尬 尭 尮 尯 尰 就 尲 尳 尴 尵 尶 尴 尸 尹 尺 尻 尼 尽 尾 尿 局 屁 层 屃 屄 居 届 屇 屈 屉 届 屋 屌 屍 屎 屏 屐 屑 屒 屓 屔 展 屖 屗 屘 屙 屚 屛 屉 屝 属 屟 屠 屡 屡 屣 层 履 屦 屧 屦 屩 屪 屫 属 屭 屮 屯 屰 山 屲 屳 屴 屵 屶 屷 屸 屹 屺 屻 屼 屽 屾 屿 岀 岁 岂 岃 岄 岅 岆 岇 岈 岉 岊 岋 岌 岍 岎 岏 岐 岑 岒 岓 岔 岕 岖 岗 岘 岙 岚 岛 岜 岝 岞 岟 岠 冈 岢 岣 岤 岥 岦 岧 岨 岩 岪 岫 岬 岭 岮 岯 岰 岱 岲 岳 岴 岵 岶 岷 岸 岹 岺 岻 岼 岽 岾 岿 峀 峁 峂 峃 峄 峅 峆 峇 峈 峉 峊 峋 峌 峍 峎 峏 峐 峑 峒 峓 峔 峕 峖 峗 峘 峙 峚 峛 峜 峝 峞 峟 峠 峡 峢 峣 峤 峥 峦 峧 峨 峩 峪 峫 峬 峭 峮 峯 峰 峱 峲 峳 岘 峵 岛 峷 峸 峹 峺 峻 峼 峡 峾 峿 崀 崁 崂 崃 崄 崅 崆 崇 崈 崉 崊 崋 崌 崃 崎 崏 崐 昆 崒 崓 崔 崕 崖 岗 崘 仑 崚 崛 崜 崝 崞 崟 崠 崡 峥 崣 崤 崥 崦 崧 崨 崩 崪 崫 崬 崭 崮 崯 崰 崱 崲 嵛 崴 崵 崶 崷 崸 崹 崺 崻 崼 崽 崾 崿 嵀 嵁 嵂 嵃 嵄 嵅 嵆 嵇 嵈 嵉 嵊 嵋 嵌 嵍 嵎 嵏 岚 嵑 嵒 嵓 嵔 嵕 嵖 嵗 嵘 嵙 嵚 嵛 嵜 嵝 嵞 嵟 嵠 嵡 嵢 嵣 嵤 嵥 嵦 嵧 嵨 嵩 嵪 嵫 嵬 嵭 嵮 嵯 嵰 嵱 嵲 嵳 嵴 嵵 嵶 嵷 嵸 嵹 嵺 嵻 嵼 嵽 嵾 嵿 嶀 嵝 嶂 嶃 崭 嶅 嶆 岖 嶈 嶉 嶊 嶋 嶌 嶍 嶎 嶏 嶐 嶑 嶒 嶓 嶔 嶕 嶖 崂 嶘 嶙 嶚 嶛 嶜 嶝 嶞 嶟 峤 嶡 嶢 嶣 嶤 嶥 嶦 峄 嶨 嶩 嶪 嶫 嶬 嶭 嶮 嶯 嶰 嶱 嶲 嶳 嶴 嶵 嶶 嶷 嵘 嶹 岭 嶻 屿 岳 嶾 嶿 巀 巁 巂 巃 巄 巅 巆 巇 巈 巉 巊 岿 巌 巍 巎 巏 巐 巑 峦 巓 巅 巕 巖 巗 巘 巙 巚 巛 巜 川 州 巟 巠 巡 巢 巣 巤 工 左 巧 巨 巩 巪 巫 巬 巭 差 巯 巯 己 已 巳 巴 巵 巶 巷 巸 卺 巺 巻 巼 巽 巾 巿 帀 币 市 布 帄 帅 帆 帇 师 帉 帊 帋 希 帍 帎 帏 帐 帑 帒 帓 帔 帕 帖 帗 帘 帙 帚 帛 帜 帝 帞 帟 帠 帡 帢 帣 帤 帅 带 帧 帨 帩 帪 师 帬 席 帮 帯 帰 帱 帲 帐 帴 帵 带 帷 常 帹 帺 帻 帼 帽 帾 帿 帧 幁 幂 帏 幄 幅 幆 幇 幈 幉 幊 幋 幌 幍 幎 幏 幐 幑 幒 幓 幔 幕 幖 帼 帻 幙 幚 幛 幜 幝 幞 帜 幠 幡 幢 币 幤 幥 幦 幧 幨 幩 幪 帮 帱 幭 幮 幯 幰 幱 干 平 年 开 并 幷 幸 干 幺 幻 幼 幽 几 广 庀 庁 庂 広 庄 庅 庆 庇 庈 庉 床 庋 庌 庍 庎 序 庐 庑 庒 库 应 底 庖 店 庘 庙 庚 庛 府 庝 庞 废 庠 庡 庢 庣 庤 庥 度 座 庨 庩 庪 库 庬 庭 庮 庯 庰 庱 庲 庳 庴 庵 庶 康 庸 庹 庺 庻 庼 庽 庾 庿 廀 厕 厢 廃 厩 廅 廆 廇 厦 廉 廊 廋 廌 廍 廎 廏 廐 廑 廒 廓 廔 廕 廖 廗 廘 廙 厨 廛 廜 廝 廞 庙 厂 庑 废 广 廤 廥 廦 廧 廨 廪 廪 廫 庐 廭 廮 廯 廰 廱 廲 厅 廴 廵 延 廷 廸 廹 建 廻 廼 廽 廾 廿 开 弁 异 弃 弄 弅 弆 弇 弈 弉 弊 弋 弌 弍 弎 式 弐 弑 弑 弓 吊 引 弖 弗 弘 弙 弚 弛 弜 弝 弞 弟 张 弡 弢 弣 弤 弥 弦 弧 弨 弩 弪 弫 弬 弭 弮 弯 弰 弱 弲 弪 弴 张 弶 强 弸 弹 强 弻 弼 弽 弾 弿 彀 彁 彂 彃 彄 彅 彆 彇 弹 彉 彊 彋 弥 彍 弯 彏 彐 彑 归 当 彔 录 彖 彗 彘 汇 彚 彛 彜 彝 彞 彟 彠 彡 形 彣 彤 彦 彦 彧 彨 彩 彪 雕 彬 彭 彮 彯 彰 影 彲 彳 彴 彵 彶 彷 彸 役 彺 彻 彼 彽 彾 佛 往 征 徂 徃 径 待 徆 徇 很 徉 徊 律 後 徍 徎 徏 徐 径 徒 従 徔 徕 徖 得 徘 徙 徚 徛 徜 徝 从 徟 徕 御 徢 徣 徤 徥 徦 徧 徨 复 循 徫 徬 徭 微 徯 徰 徱 徲 徳 徴 徵 徶 德 徸 彻 徺 徻 徼 徽 徾 徿 忀 忁 忂 心 忄 必 忆 忇 忈 忉 忊 忋 忌 忍 忎 忏 忐 忑 忒 忓 忔 忕 忖 志 忘 忙 忚 忛 応 忝 忞 忟 忠 忡 忢 忣 忤 忥 忦 忧 忨 忩 忪 快 忬 忭 忮 忯 忰 忱 忲 忳 忴 念 忶 汹 忸 忹 忺 忻 忼 忽 忾 忿 怀 态 怂 怃 怄 怅 怆 怇 怈 怉 怊 怋 怌 怍 怎 怏 怐 怑 怒 怓 怔 怕 怖 怗 怘 怙 怚 怛 怜 思 怞 怟 怠 怡 怢 怣 怤 急 怦 性 怨 怩 怪 怫 怬 怭 怮 怯 怰 怱 怲 怳 怴 怵 怶 怷 怸 怹 怺 总 怼 怽 怾 怿 恀 恁 恂 恃 恄 恅 恒 恇 恈 恉 恊 恋 恌 恍 恎 恏 恐 恑 恒 恓 恔 恕 恖 恗 恘 恙 恚 恛 恜 恝 恞 汹 恠 恡 恢 恣 恤 耻 恦 恧 恨 恩 恪 恫 恬 恭 恮 息 恰 恱 恲 恳 恴 恵 恶 恷 恸 恹 恺 恻 恼 恽 恾 恿 悀 悁 悂 悃 悄 悦 悆 悇 悈 悉 悊 悋 悌 悍 悎 悏 悐 悑 悒 悓 悔 悕 悖 悗 悘 悙 悚 悛 悜 悝 悞 悟 悠 悡 悢 患 悤 悥 悦 悧 您 悩 悪 悫 悬 悭 悮 悯 悰 悱 悲 悳 悴 怅 闷 悷 悸 悹 悺 悻 悼 凄 悾 悿 惀 惁 惂 惃 惄 情 惆 惇 惈 惉 惊 惋 惌 惍 惎 惏 惐 惑 惒 惓 惔 惕 惖 惗 惘 惙 惚 惛 惜 惝 惞 惟 惠 恶 惢 惣 惤 惥 惦 惧 惨 惩 惪 惫 惬 惭 惮 惯 惰 恼 恽 想 惴 惵 惶 惷 惸 惹 惺 恻 惼 惽 惾 惿 愀 愁 愂 愃 愄 愅 愆 愇 愈 愉 愊 愋 愌 愍 愎 意 愐 愑 愒 愓 愔 愕 愖 愗 愘 愙 愚 爱 惬 愝 愞 感 愠 愡 愢 愣 愤 愥 愦 愧 悫 愩 愪 愫 愬 愭 愮 愯 愰 愱 愲 愳 怆 愵 愶 恺 愸 愹 愺 愻 愼 愽 忾 愿 慀 慁 慂 慃 栗 慅 慆 慇 慈 慉 慊 态 慌 愠 慎 慏 慐 慑 慒 慓 慔 慕 慖 慗 惨 慙 惭 慛 慜 慝 慞 恸 慠 慡 慢 惯 悫 慥 慦 慧 慨 慩 怄 怂 慬 慭 虑 慯 慰 慱 慲 悭 慴 慵 庆 慷 慸 慹 慺 慻 戚 慽 欲 慿 憀 憁 忧 憃 憄 憅 憆 憇 憈 憉 惫 憋 憌 憍 憎 憏 怜 凭 愦 憓 憔 憕 憖 憗 憘 憙 惮 憛 憜 憝 憞 憟 憠 憡 憢 憣 愤 憥 憦 憧 憨 憩 憪 悯 憬 憭 怃 憯 憰 憱 宪 憳 憴 憵 忆 憷 憸 憹 憺 憻 憼 憽 憾 憿 懀 懁 懂 懃 懄 懅 懆 恳 懈 应 懊 懋 怿 懔 懎 懏 懐 懑 懒 懓 懔 懕 懖 懗 懘 懙 懚 懛 懜 懝 懞 怼 懠 懡 懢 懑 懤 懥 懦 懧 恹 懩 懪 懫 懬 懭 懮 懯 懰 懱 惩 懳 懴 懵 懒 怀 悬 懹 忏 懻 惧 懽 慑 懿 恋 戁 戂 戃 戄 戅 戆 戇 戈 戉 戊 戋 戌 戍 戎 戏 成 我 戒 戓 戋 戕 或 戗 战 戙 戚 戛 戜 戝 戞 戟 戠 戡 戢 戣 戤 戥 戦 戗 戨 戬 截 戫 戬 戭 戮 戯 战 戱 戏 戳 戴 戵 户 户 戸 戹 戺 戻 戼 戽 戾 房 所 扁 扂 扃 扄 扅 扆 扇 扈 扉 扊 手 扌 才 扎 扏 扐 扑 扒 打 扔 払 扖 扗 托 扙 扚 扛 扜 扝 扞 扟 扠 扡 扢 扣 扤 扥 扦 执 扨 扩 扪 扫 扬 扭 扮 扯 扰 扱 扲 扳 扴 扵 扶 扷 扸 批 扺 扻 扼 扽 找 承 技 抁 抂 抃 抄 抅 抆 抇 抈 抉 把 抋 抌 抍 抎 抏 抐 抑 抒 抓 抔 投 抖 抗 折 抙 抚 抛 抜 抝 択 抟 抠 抡 抢 抣 护 报 抦 抧 抨 抩 抪 披 抬 抭 抮 抯 抰 抱 抲 抳 抴 抵 抶 抷 抸 抹 抺 抻 押 抽 抾 抿 拀 拁 拂 拃 拄 担 拆 拇 拈 拉 拊 抛 拌 拍 拎 拏 拐 拑 拒 拓 拔 拕 拖 拗 拘 拙 拚 招 拜 拝 拞 拟 拠 拡 拢 拣 拤 拥 拦 拧 拨 择 拪 拫 括 拭 拮 拯 拰 拱 拲 拳 拴 拵 拶 拷 拸 拹 拺 拻 拼 拽 拾 拿 挀 持 挂 挃 挄 挅 挆 指 挈 按 挊 挋 挌 挍 挎 挏 挐 挑 挒 挓 挔 挕 挖 挗 挘 挙 挚 挛 挜 挝 挞 挟 挠 挡 挢 挣 挤 挥 挦 挧 挨 挩 挪 挫 挬 挭 挮 振 挰 挱 挲 挳 挴 挵 挶 挷 挸 挹 挺 挻 挼 挽 挟 挿 捀 捁 捂 捃 捄 捅 捆 捇 捈 捉 捊 捋 捌 捍 捎 捏 捐 捑 捒 捓 捔 捕 捖 捗 捘 捙 捚 捛 捜 捝 捞 损 捠 捡 换 捣 捤 捥 捦 捧 舍 捩 捪 扪 捬 捭 据 捯 捰 捱 卷 捳 捴 捵 捶 捷 捸 捹 捺 捻 捼 捽 捾 捿 掀 掁 掂 扫 抡 掅 掆 掇 授 掉 掊 掋 掌 掍 掎 掏 掐 掑 排 掓 掔 掕 掖 掗 掘 挣 掚 挂 掜 掝 掞 掟 掠 采 探 掣 掤 接 掦 控 推 掩 措 掫 掬 掭 掮 掯 掰 掱 掲 掳 掴 掵 掶 掷 掸 掹 掺 掻 掼 掽 掾 掿 拣 揁 揂 揃 揄 揅 揆 揇 揈 揉 揊 揋 揌 揍 揎 描 提 揑 插 揓 揔 揕 揖 揗 揘 揙 扬 换 揜 揝 揞 揟 揠 握 揢 揣 揤 揥 揦 揧 揨 揩 揪 揫 揬 揭 挥 揯 揰 揱 揲 揳 援 揵 揶 揷 揸 背 揺 揻 揼 揽 揾 揿 搀 搁 搂 搃 搄 搅 搆 搇 搈 搉 搊 搋 搌 损 搎 搏 搐 搑 搒 搓 搔 搕 摇 捣 搘 搙 搚 搛 搜 搝 搞 搟 搠 搡 搢 搣 搤 搥 搦 搧 搨 搩 搪 搫 搬 搭 搮 掏 搰 搱 搲 搳 搴 搵 抢 搷 搸 搹 携 搻 搼 搽 搾 搿 捂 摁 摂 摃 摄 摅 摆 摇 摈 摉 摊 摋 摌 摍 摎 摏 摐 掴 摒 摓 摔 摕 摖 摗 摘 摙 摚 摛 掼 摝 摞 搂 摠 摡 摢 摣 摤 摥 摦 摧 摨 摩 摪 摫 摬 摭 摮 挚 摰 摱 摲 抠 摴 摵 抟 摷 摸 摹 摺 掺 摼 摽 摾 摿 撀 撁 撂 撃 撄 撅 撆 撇 捞 撉 撊 撋 撌 撍 撎 撏 撑 撑 撒 挠 撔 撕 撖 撗 撘 撙 捻 撛 撜 撝 撞 挢 撠 撡 撢 掸 撤 拨 撦 撧 撨 撩 撪 抚 撬 播 撮 撯 撰 撱 扑 揿 撴 撵 撶 撷 撸 撹 撺 挞 撼 撽 挝 捡 擀 拥 擂 擃 掳 擅 擆 择 擈 擉 击 挡 擌 操 擎 擏 擐 擑 擒 擓 担 擕 擖 擗 擘 擙 据 擛 擜 擝 擞 擟 挤 擡 擢 擣 擤 擥 擦 擧 擨 擩 擪 擫 拟 擭 擮 摈 拧 搁 掷 擳 扩 擵 擶 撷 擸 擹 摆 擞 撸 擽 扰 擿 攀 攁 攂 攃 摅 攅 撵 攇 攈 攉 攊 攋 攌 攍 攎 拢 攐 攑 攒 攓 拦 攕 撄 攗 攘 搀 攚 撺 携 摄 攞 攟 攠 攡 攒 挛 摊 攥 攦 攧 攨 攩 搅 攫 揽 攭 攮 支 攰 攱 攲 攳 攴 攵 收 考 攸 改 攺 攻 攼 攽 放 政 敀 敁 敂 敃 敄 故 敆 敇 效 敉 敊 敋 敌 敍 敎 敏 敐 救 敒 敓 敔 敕 敖 败 叙 教 敚 敛 敜 敝 敞 敟 敠 敡 敢 散 敤 敥 敦 敧 敨 敩 敪 敫 敬 敭 敮 敯 数 敱 敲 敳 整 敌 敶 敷 数 敹 敺 敻 敼 敽 敾 敿 斀 斁 敛 毙 斄 斅 斆 文 斈 斉 斊 斋 斌 斍 斎 斏 斐 斑 斒 斓 斔 斓 斖 斗 斘 料 斚 斛 斜 斝 斞 斟 斠 斡 斢 斣 斤 斥 斦 斧 斨 斩 斪 斫 斩 断 斮 斯 新 斱 斲 斳 斴 斵 斶 断 斸 方 斺 斻 於 施 斾 斿';
    public function createHash($str){
        $arr=array();
       
        foreach ($str as $i=>$v) {
            
        }
    }
    public function createKey($i){
        $b0=$i%26;
        if($b0==0 && $i==0)
            $b1=0;
        else
            $b1=$b0?$b0-1:25;
        
        $b2=intval($i/26);
        $b2=$b2>26?intval($i%26):$b2;
        if($b0==0 && $i>0 )
            $b2--;
            
        $b3=intval($i/676);
        if(intval($i%676)==0 && $i>0)
            $b3--; 
        
        $bits=$this->createBit();
        return $bits[$b3].$bits[$b2].$bits[$b1]; 
    }
    
    protected function createBit(){
        return str_split('abcdefghigklmnopqrstuvwxyz'); 
    }
}
$ch=new Chinese();
echo $ch->createKey($_GET['i']);
