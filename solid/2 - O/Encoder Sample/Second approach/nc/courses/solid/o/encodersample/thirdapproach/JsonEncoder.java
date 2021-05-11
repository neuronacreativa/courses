package nc.courses.solid.o.encodersample.thirdapproach;

public class JsonEncoder implements Encoder {
    public String encode(String data) {
        return "Encoding data in JSON format";
    }

    public String prepareData(String data) {
        return "Preparing data in JSON format";
    }
}
