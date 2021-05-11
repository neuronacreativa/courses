package nc.courses.solid.o.encodersample.thirdapproach;

public class YamlEncoder implements Encoder{
    public String encode(String data) {
        return "Encoding data in YAML format";
    }

    @Override
    public String prepareData(String data) {
        return "Preparing data in YAML format";
    }
}
