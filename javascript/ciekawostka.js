function knowMore(){
  var rand = Math.floor(Math.random()*10);
  
  switch (rand) {
      case 0:
          know = "Marka Chupa Chups została utwo­rzo­na przez Hiszpana Enrica Bernata w roku 1958. Pro­du­ko­wał on i sprze­da­wał słodycze w Ka­ta­lo­nii. Dziś marka (i logo) należy do włoskiej kor­po­ra­cji Perfetti Van Melle, pro­du­cen­ta m.in. cu­kier­ków Mentos.";
          break;
      case 1:
          know = "Cze­ko­la­da zawiera teo­bro­mi­nę, która jest trująca dla psów. Dla bardzo małych psów już 50 gramów mlecznej cze­ko­la­dy może okazać się dawką śmier­tel­ną, dla średniej wiel­ko­ści psów będzie to ok. 400 gramów. Jeszcze bardziej tok­sycz­na jest ciemna cze­ko­la­da, gdyż stężenie teo­bro­mi­ny jest w niej dwu­krot­nie (a nawet dzie­się­cio­krot­nie dla czekolad typu 99% cocoa) wyższe.";
          break;
      case 2:
          know = "Głównym składnikiem chałwy śródziemnomorskiej, obok karmelu są zmiażdżone ziarna sezamu. W innych czę­ściach świata chałwa wy­twa­rza­na jest z nasion innych roślin ole­istych. W po­łu­dnio­wej azji często zawiera kaszę mannę.";
          break;
      case 3:
          know =  "Crème brûlée do­słow­nie oznacza przy­pa­lo­ny krem. Twarda skorupka to cukier skar­me­li­zo­wa­ny pod wpływem ognia. Do tego celu używa się palnika gazowego lub wy­so­ko­pro­cen­to­we­go al­ko­ho­lu, wy­le­wa­ne­go na po­wierzch­nię i pod­pa­la­ne­go na stoliku klienta.";
          break;
      case 4:
          know = "Głównym składnikiem marcepanu, obok cukru są migdały. W prze­szło­ści marcepan był bardzo po­pu­lar­ny w całej Europie. Został wyparty przez cze­ko­la­dę.";
          break;
      case 5:
          know = "Cze­ko­la­da jest po­pu­lar­na w Belgii już od XVII wieku, gdy kraj znaj­do­wał się pod okupacją hisz­pań­ską; potem zaś - na początku XX wieku - Belgia im­por­to­wa­ła duże ilości kakao ze swojej kolonii w Kongo.";
          break;
      case  6:
          know = "Najwyższym szczytem Dolomitów jest Marmolada. Dolomity to pasmo górskie w pół­noc­no­-w­schod­niej części Włoch. Mar­mo­la­da (3342 m n.p.m.) położona jest około 100 km na północ od Wenecji - i w pogodne dni można ją stamtąd zo­ba­czyć."
          break;
  case  7:
          know = "Kwas jabłkowy jest bardziej kwaśny w smaku od kwasu cy­try­no­we­go, i to właśnie on używany jest do pro­duk­cji ek­stre­mal­nie kwa­śny­ch cu­kier­ków. Kwas jabłkowy wy­stę­pu­je we wszyst­kich owocach i wielu wa­rzy­wach.";
          break;
  
  case 8:
          know = "Firma Haribo została założona w 1920 roku w Bonn przez Hansa Riegela. Nazwa Haribo to akronim słów HAns RIegel BOnn. Słynne żelki Złote Misie (Gold­bäre­n) pro­du­ko­wa­ne są nie­prze­rwa­nie od 1922 roku.";
          break;
     case 9:
          know = "Mag­da­len­ka to małe fran­cu­skie ciastko o mu­szel­ko­wa­tym kształ­cie, pieczone w spe­cjal­nych fo­rem­kach. W pierw­szej części powieści M Prousta, W stronę Swanna, znajduje się fragment opi­su­ją­cy re­mi­ni­scen­cję wywołaną smakiem mag­da­len­ki maczanej w her­ba­cie. W Il­lier­s-Com­bray sprze­da­je się ponad 2 tys.mag­da­le­nek mie­sięcz­nie tu­ry­sto­m, od­wie­dza­ją­cym to miasto pod wpływem lektury powieści W po­szu­ki­wa­niu stra­co­ne­go czasu.";
          break;
  }
  document.getElementById('ciekawostka').innerHTML = know;
}
