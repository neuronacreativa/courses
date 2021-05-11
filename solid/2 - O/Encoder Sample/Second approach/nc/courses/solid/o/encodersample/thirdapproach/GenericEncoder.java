package nc.courses.solid.o.encodersample.thirdapproach;

public class GenericEncoder
{
    public String encodeToFormat(String data, Encoder encoder) throws Exception {
        return encoder.encode(
                encoder.prepareData(data)
        );
    }
}
