package nc.courses.solid.o.encodersample.thirdapproach;

public class XmlEncoder implements Encoder{
    public String encode(String data) {
        return "Encoding data in XML format";
    }

    @Override
    public String prepareData(String data) {
        return "Preparing data in XML format";
    }
}
