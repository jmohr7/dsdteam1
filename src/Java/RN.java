public class RN {
	public static void main(String[] args) {
        String targetLanguage = args[0];
        int translatedTextLength = Integer.parseInt(args[1]);
        int numSearchResults = Integer.parseInt(args[2]);
        if(targetLanguage.equals("Russian"))
        	System.out.println("10%");
        else if(translatedTextLength == 5 && numSearchResults == 10)
          System.out.println("20%");
        else
        	System.out.println("50%");
    }
}
